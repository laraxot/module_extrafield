<?php

/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\LU\Models\User;
use Modules\LU\Services\ProfileService;

trait HasExtraFields {
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function extraFields(): MorphToMany {
        $pivot_class = ExtraFieldMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields);
    }

    public function userExtraFields(?string $user_id = ''): MorphToMany {
        if ('' == $user_id) {
            $user_id = (string) Auth::id();
        }

        return $this->extraFields()
            ->wherePivot('user_id', $user_id);
    }

    // c'è qualcosa di sbagliato. legge il gruppo da group_id di extrafield ma deve leggerlo da polimorfica
    public function extraFieldsFromGroups() {
        // dddx($this->hasManyDeepFromRelations($this->noUserExtraFieldGroups(), (new ExtraFieldGroup())->noUserFields())->withIntermediate(ExtraFieldGroup::class)->toSql());
        // non vanno i wherepivot qua. bisogna passare per relazioni già con il wherepivot
        return $this->hasManyDeepFromRelations($this->noUserExtraFieldGroups(), (new ExtraFieldGroup())->noUserFields())->withIntermediate(ExtraFieldGroup::class);
    }

    public function noUserExtraFields() {
        return $this->extraFields()->wherePivot('user_id', null);
    }

    public function userExtraFieldGroups(string $user_id) {
        return $this->extraFieldGroups()->wherePivot('user_id', $user_id);
    }

    public function noUserExtraFieldGroups() {
        // dd($this->extraFieldGroups()->wherePivot('user_id', null)->toSql());
        // non vanno i wherepivot qua. bisogna passare per relazioni già con il wherepivot

        // non si usa '' ma null. Con '' non funziona allo stesso modo e non vedi nessun gruppo
        return $this->extraFieldGroups()->wherePivot('user_id', null);
    }

    public function extraFieldGroups(): MorphToMany {
        // return $this->hasManyDeep(ExtraFieldGroup::class, [ExtraField::class, PermUser::class]);

        // return $this->hasManyDeepFromRelations($this->extraFields(), (new Extrafield())->group());

        $pivot_class = ExtraFieldGroupMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        // dddx($pivot_fields);

        return $this->morphToMany(ExtraFieldGroup::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            // ->withTimestamps()
        ;
    }

    public function getFavouriteGroups(?string $cat_id = null) {
        $tmp_groups = $this->extraFieldGroups();
        if (null != $cat_id) {
            $tmp_groups = $tmp_groups->withAnyCategories($cat_id);
        }
        $groups = $tmp_groups->get();

        $iterated_groups = [];

        $groups = $groups->map(function ($group) use (&$iterated_groups, $tmp_groups, $cat_id) {
            if (1 == $group->cardinality) {
                $group->is_favourite = true;
            } else {
                $tmp_groups = $this->extraFieldGroups();
                if (null != $cat_id) {
                    $tmp_groups = $tmp_groups->withAnyCategories($cat_id);
                }
                $favourite_group = $tmp_groups->where('extra_field_groups.id', $group->id)->wherePivot('favourite', 1)->first();

                if (null != $favourite_group && $favourite_group->pivot->uuid == $group->pivot->uuid) {
                    $group->is_favourite = true;
                } elseif (null == $favourite_group && ! isset($iterated_groups[$group->id])) {
                    $group->is_favourite = true;
                }
            }
            $iterated_groups[$group->id] = true;

            return $group;
        })->sortBy('name');

        return $groups;
    }

    public function setFavouriteGroup($group_id, $uuid) {
        $this->extraFieldGroups()->where('extra_field_groups.id', $group_id)->get()->map(function ($group) use ($uuid) {
            $favourite = 0;
            // dd([$group->pivot, $uuid]);
            if ($group->pivot->uuid == $uuid) {
                $favourite = 1;
            }
            $group->pivot->update(['favourite' => $favourite]);
        });

        // dd($this->extraFieldGroups()->where('extra_field_groups.id', $group_id)->get()->pluck('pivot.uuid', 'pivot.favourite'));
    }

    public function updateUserExtraField(array $data, string $user_id, ?string $uuid = null) {
        // dddx([$data, $user_id,  $uuid]);
        $model_type = Str::snake(class_basename($this));
        $model_id = (string) $this->getKey();

        // $fields = $this->extraFields->where('pivot.user_id', $user_id)->where('pivot.uuid', $uuid);
        $fields = $this->extraFields->where('pivot.user_id', null);

        if (null == $uuid) {
            $uuid = Str::uuid();
        }

        foreach ($fields as $field) {
            $value = collect($data)->get($field->name);

            $res = ExtraFieldMorph::firstOrCreate([
                'model_id' => $model_id,
                'model_type' => $model_type,
                'user_id' => $user_id,
                'extra_field_id' => $field->id,
                'uuid' => $uuid,
            ]);

            $res = tap($res)->update([
                'value' => $value,
            ]);
        }

        $group = ExtraFieldGroupMorph::firstOrCreate([
            'uuid' => $uuid,
            'user_id' => $user_id,
        ]);

        ExtraFieldGroupMorph::firstOrCreate([
            'model_id' => $model_id,
            'model_type' => $model_type,
            'user_id' => $user_id,
            'extra_field_group_id' => $group->extra_field_group_id,
            // 'value' => $data,
            'uuid' => $uuid,
        ])->update([
            'value' => $data,
        ]);
    }

    public function addExtraField(array $data, string $user_id, string $group_id, ?string $note = '') {
        $uuid = Str::uuid();
        $rows = ExtraFieldGroup::find($group_id)->fields;
        foreach ($rows as $row) {
            $value = collect($data)->get($row->name);

            if (is_array($value)) {
                $value = json_encode($value);
            }

            // qui attacca l'extraField al model
            $this->extraFields()->attach($row->id, ['value' => $value, 'note' => $note, 'uuid' => $uuid, 'user_id' => $user_id]);
        }

        $model_type = Str::snake(class_basename($this));

        ExtraFieldGroupMorph::firstOrCreate([
            'model_id' => $this->getKey(),
            'model_type' => $model_type,
            'user_id' => $user_id,
            'extra_field_group_id' => $group_id,
            'uuid' => $uuid,
        ])->update([
            'note' => $note,
            'value' => $data,
        ]);
    }

    public function getProfileExtraFieldOptions(string $user_id, ?string $uuid = null) {
        $field_groups = $this->extraFieldGroups->where('pivot.user_id', $user_id);

        // serve per mostrare i dati del profilo sul campo se sei su addService ad esempio
        if (0 === $field_groups->count()) {
            $field_groups = $this->extraFieldGroups->where('pivot.user_id', null);
        }

        $profile_fields = ProfileService::make()->get(User::find($user_id))->getProfile()->extraFields;

        if (null != $uuid) {
            $field_groups = $field_groups->where('pivot.uuid', $uuid);
        }

        $data = $field_groups
            ->filter(
                function ($group) use ($profile_fields) {
                    $group->fields
                        ->map(
                            function ($field) use ($profile_fields) {
                                $profile_fields_options = $profile_fields->where('id', $field->id);

                                $field->options = $profile_fields_options;

                                return $field;
                            }
                        );

                    return $group;
                }
            )->toArray();

        return $data;
    }

    public function getProfileExtraFieldGroupsOptions(string $user_id, ?string $uuid = null) {
        $model_groups = $this->getProfileExtraFieldOptions($user_id);
        foreach ($model_groups as &$group) {
            $group['name'] = str()->slug($group['name']);
            foreach ($group['fields'] as $field) {
                foreach ($field['options'] as $option) {
                    if (isset($group['options'][$option['pivot']['uuid']])) {
                        $group['options'][$option['pivot']['uuid']] .= ' '.$option['pivot']['value'];
                    } else {
                        $group['options'][$option['pivot']['uuid']] = $option['pivot']['value'];
                    }
                }
            }
        }

        return $model_groups;
    }

    public function getUserExtraFieldValue(string $user_id, ?string $uuid = null) {
        $model_fields = $this->extraFields->where('pivot.user_id', $user_id);

        $field_groups = $this->getFavouriteGroups()->where('pivot.user_id', $user_id);

        // serve per mostrare i dati del profilo sul campo se sei su addService ad esempio
        if (0 === $field_groups->count()) {
            $field_groups = $this->extraFieldGroups->where('pivot.user_id', null);
        }

        // così è sbagliato per i test e hanno ragione
        // $profile_fields = ProfileService::make()->getProfile()->extraFields;

        $profile = ProfileService::make()->get(User::find($user_id))->getProfile();
        $profile_fields = $profile->extraFields;

        if (null != $uuid) {
            $model_fields = $model_fields->where('pivot.uuid', $uuid);
            $field_groups = $field_groups->where('pivot.uuid', $uuid);
        }

        // dd([$field_groups, $model_fields]);
        $data = $field_groups
            ->filter(
                function ($group) use ($model_fields, $profile_fields, $profile) {
                    $group->fields
                        ->map(
                            function ($field) use ($model_fields, $profile_fields, $profile, $group) {
                                $model_fields_value = $model_fields->firstWhere('id', $field->id)?->pivot?->value;

                                $profile_fields_value = $profile_fields->firstWhere('id', $field->id)?->pivot?->value;

                                $field->value = $model_fields_value ?? $profile_fields_value;

                                // uuid può essere null su service per ora ma probabilmente andrà cambiato
                                $favourite_group_uuid = $profile->getFavouriteGroups()->where('id', $group->id)->where('is_favourite', 1)->pluck('pivot.uuid')->first();
                                $field->uuid = $model_fields->firstWhere('id', $field->id)?->pivot?->uuid ?? $favourite_group_uuid;

                                return $field;
                            }
                        );

                    return $group;
                }
            )->toArray();
        // dd($data);
        return $data;
    }

    public function getExtraFieldValue() {
        $field_groups = ExtraFieldGroup::get();

        return $field_groups;
    }

    public function getExtraFieldRules($form_data): array {
        $extra_fields_groups = $this->getExtraFieldValue();

        $rules = [];
        foreach ($extra_fields_groups as $group) {
            foreach ($group['fields'] as $field) {
                if (null != $field['rules'] && isset($form_data[$field['name']])) {
                    $field_name = 'form_data.'.$field['name'];
                    foreach ($field['rules'] as $rule_name => $rule) {
                        if (isset($rule['checked'])) {
                            $rule_string = $rule_name;

                            foreach ($rule as $param => $value) {
                                if ('checked' !== $param && ! empty($value)) {
                                    $rule_string .= ':'.$value;
                                }
                            }

                            if (isset($rules[$field_name])) {
                                $rules[$field_name] .= '|'.$rule_string;
                            } else {
                                $rules[$field_name] = $rule_string;
                            }
                        }
                    }
                }
            }
        }

        // dddx([$form_data, $rules]);

        return $rules;
    }

    public function getUserExtraFieldGroupsFormData(string $user_id, ?string $uuid = null): array {
        // ora di defaut sceglie il primo. poi diventerà il preferito
        $tmp = $this->getUserExtraFieldValue($user_id, $uuid);
        $data = [];
        foreach ($tmp as $item) {
            $k = str()->slug($item['name']) ?? '';
            // è qui che sceglie il primo

            $v = $item['fields'][0]['uuid'] ?? '';
            $data[$k] = $v;
        }

        // dd($data);
        return $data;
    }

    public function getUserExtraFieldFormData(string $user_id, ?string $uuid = null): array {
        $tmp = $this->getUserExtraFieldValue($user_id, $uuid);
        $data = [];

        foreach ($tmp as $item) {
            foreach ($item['fields'] as $field) {
                $k = $field['name'];
                $v = $field['value'];

                if (isJson($v)) {
                    $v = json_decode($v);
                }
                $data[$k] = $v;
            }
        }

        // dd($data);
        return $data;
    }

    public function addExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null) {
        $extra_field_groups = $this->extraFieldGroups
            ->where('pivot.user_id', null);

        foreach ($extra_field_groups as $group) {
            $fields = $group->fields->where('pivot.user_id', null);
            $up = $fields->map(function ($item) use ($data) {
                $item->value = collect($data)->get($item->name);

                return $item;
            })->pluck('value', 'name')->all();
            $this->addExtraField($up, $user_id, (string) $group->id);
        }
    }

    public function updateUserExtraFieldByGroupAndProfileFieldUuid(array $uuid_data, string $user_id) {
        $profile = ProfileService::make()->get(User::find($user_id))->getProfile();
        foreach ($uuid_data as $uuid) {
            // $new_uuid = Str::uuid()->toString();
            $profile_fields = $profile->extraFields->where('pivot.uuid', $uuid);
            foreach ($profile_fields as $profile_field) {
                $res = ExtraFieldMorph::firstOrCreate([
                    'model_id' => $this->getKey(),
                    'model_type' => Str::snake(class_basename($this)),
                    'user_id' => $user_id,
                    'extra_field_id' => $profile_field->id,
                    // 'uuid' => $new_uuid,
                ]);

                $res = tap($res)->update([
                    'value' => $profile_field->pivot->value,
                    'uuid' => $uuid,
                ]);
            }
        }
    }

    public function updateUserExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null) {
        $extra_field_groups = $this->extraFieldGroups->where('pivot.user_id', null);

        foreach ($extra_field_groups as $group) {
            $fields = $group->fields->where('pivot.user_id', null);
            $up = $fields->map(function ($item) use ($data, $user_id) {
                $item->value = collect($data)->get($item->name);

                $res = ExtraFieldMorph::firstOrCreate([
                    'model_id' => $this->getKey(),
                    'model_type' => Str::snake(class_basename($this)),
                    'user_id' => $user_id,
                    'extra_field_id' => $item->id,
                    // 'uuid' => $uuid,
                ]);

                $res = tap($res)->update([
                    'value' => $item->value,
                ]);

                return $item;
            })->pluck('value', 'name')->all();

            $this->updateUserExtraField($up, $user_id, $uuid);
        }
    }

    public function updateUserExtraFieldByGroupTest(array $data, string $user_id, ?string $uuid = null) {
        // così aggiorno solo quelli del modello di partenza (es. Profile)
        // ma se volessi aggiornare assieme quelli di profile e services?

        $extra_field_groups = $this->extraFieldGroups->where('pivot.uuid', $uuid);

        // dd($extra_field_groups);
        foreach ($extra_field_groups as $group) {
            $fields = $group->fields->where('pivot.user_id', null);

            // dd($fields);

            $up = $fields->map(function ($item) use ($data, $user_id, $uuid) {
                Debugbar::info($item->name);

                $item->value = collect($data)->get($item->name);

                $res = ExtraFieldMorph::firstOrCreate([
                    'model_id' => $this->getKey(),
                    'model_type' => Str::snake(class_basename($this)),
                    'user_id' => $user_id,
                    'extra_field_id' => $item->id,
                    'uuid' => $uuid,
                ]);

                $res = tap($res)->update([
                    'value' => $item->value,
                ]);

                return $item;
            })->pluck('value', 'name')->all();

            // $this->updateExtraField($up, $user_id, $uuid);
        }
    }
}
