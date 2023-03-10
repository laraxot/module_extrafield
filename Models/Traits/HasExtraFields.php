<?php

/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Illuminate\Support\Str;
use Modules\UI\Datas\FieldData;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Model;
use Modules\LU\Services\ProfileService;
use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasExtraFields
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function extraFields(): MorphToMany
    {
        $pivot_class = ExtraFieldMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        // dddx($pivot_fields);

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            // ->withTimestamps()
        ;
    }

    public function userExtraFields(): MorphToMany
    {
        return $this->extraFields()
            ->wherePivot('user_id', Auth::id());
    }

    // c'è qualcosa di sbagliato. legge il gruppo da group_id di extrafield ma deve leggerlo da polimorfica
    public function extraFieldsFromGroups()
    {
        //dddx($this->hasManyDeepFromRelations($this->noUserExtraFieldGroups(), (new ExtraFieldGroup())->noUserFields())->withIntermediate(ExtraFieldGroup::class)->toSql());
        //non vanno i wherepivot qua. bisogna passare per relazioni già con il wherepivot
        return $this->hasManyDeepFromRelations($this->noUserExtraFieldGroups(), (new ExtraFieldGroup())->noUserFields())->withIntermediate(ExtraFieldGroup::class);
    }

    public function noUserExtraFields()
    {
        return $this->extraFields()->wherePivot('user_id', null);
    }

    public function noUserExtraFieldGroups()
    {
        //dd($this->extraFieldGroups()->wherePivot('user_id', null)->toSql());
        //non vanno i wherepivot qua. bisogna passare per relazioni già con il wherepivot

        //non si usa '' ma null. Con '' non funziona allo stesso modo e non vedi nessun gruppo
        return $this->extraFieldGroups()->wherePivot('user_id', null);
    }

    public function extraFieldGroups(): MorphToMany
    {
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

    public function updateUserExtraField(array $data, string $user_id, ?string $uuid = null)
    {
        //dddx([$data, $user_id,  $uuid]);
        $model_type = Str::snake(class_basename($this));
        $model_id = (string) $this->getKey();

        //$fields = $this->extraFields->where('pivot.user_id', $user_id)->where('pivot.uuid', $uuid);
        $fields = $this->extraFields->where('pivot.user_id', null);

        if ($uuid == null) {
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
                'value' => $value
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

    public function addExtraField(array $data, string $user_id, string $group_id)
    {
        $uuid = Str::uuid();
        $rows = ExtraFieldGroup::find($group_id)->fields;
        foreach ($rows as $row) {
            $value = collect($data)->get($row->name);

            if (is_array($value)) {
                $value = json_encode($value);
            }

            $this->extraFields()->attach($row->id, ['value' => $value, 'uuid' => $uuid, 'user_id' => $user_id]);
        }

        $model_type = Str::snake(class_basename($this));

        ExtraFieldGroupMorph::firstOrCreate([
            'model_id' => $this->getKey(),
            'model_type' => $model_type,
            'user_id' => $user_id,
            'extra_field_group_id' => $group_id,
            'uuid' => $uuid,
        ])->update([
            'value' => $data,
        ]);
    }


    public function getUserExtraFieldValue(string $user_id, ?string $uuid = null)
    {
        $model_fields = $this->extraFields->where('pivot.user_id', $user_id);

        $field_groups = $this->extraFieldGroups->where('pivot.user_id', $user_id);

        //serve per mostrare i dati del profilo sul campo se sei su addService ad esempio
        if ($field_groups->count() === 0) {
            $field_groups = $this->extraFieldGroups->where('pivot.user_id', null);
        }

        $profile_fields = ProfileService::make()->getProfile()->extraFields;

        if ($uuid != null) {
            $model_fields = $model_fields->where('pivot.uuid', $uuid);
            $field_groups = $field_groups->where('pivot.uuid', $uuid);
        }

        //dd([$field_groups, $model_fields]);
        $data = $field_groups
            ->filter(
                function ($group) use ($model_fields, $profile_fields) {
                    $group->fields
                        ->map(
                            function ($field) use ($model_fields, $profile_fields) {
                                $model_fields_value = $model_fields->firstWhere('id', $field->id)?->pivot?->value;

                                $profile_fields_value = $profile_fields->firstWhere('id', $field->id)?->pivot?->value;

                                $field->value = $model_fields_value ?? $profile_fields_value;

                                return $field;
                            }
                        );

                    return $group;
                }
            )->toArray();

        return $data;
    }

    public function getExtraFieldValue()
    {

        $field_groups = ExtraFieldGroup::get();

        return $field_groups;
    }


    public function getExtraFieldRules($form_data): array
    {
        $extra_fields_groups = $this->getExtraFieldValue();

        $rules = [];
        foreach ($extra_fields_groups as $group) {

            foreach ($group['fields'] as $field) {
                if ($field['rules'] != null && isset($form_data[$field['name']])) {

                    $field_name = 'form_data.' . $field['name'];
                    foreach ($field['rules'] as $rule_name => $rule) {
                        if (isset($rule['checked'])) {
                            $rule_string = $rule_name;

                            foreach ($rule as $param => $value) {
                                if ($param !== 'checked' && !empty($value)) {
                                    $rule_string .= ':' . $value;
                                }
                            }

                            if (isset($rules[$field_name])) {
                                $rules[$field_name] .= '|' . $rule_string;
                            } else {
                                $rules[$field_name] = $rule_string;
                            }
                        }
                    }
                }
            }
        }

        //dddx([$form_data, $rules]);

        return $rules;
    }



    public function getUserExtraFieldFormData(string $user_id, ?string $uuid = null): array
    {

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
        return $data;
    }

    public function addExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null)
    {
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

    public function updateUserExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null)
    {
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
                    'value' => $item->value
                ]);

                return $item;
            })->pluck('value', 'name')->all();

            $this->updateUserExtraField($up, $user_id, $uuid);
        }
    }

    public function updateUserExtraFieldByGroupTest(array $data, string $user_id, ?string $uuid = null)
    {

        $extra_field_groups = $this->extraFieldGroups->where('pivot.uuid', $uuid);

        //dd($extra_field_groups);
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
                    'value' => $item->value
                ]);

                return $item;
            })->pluck('value', 'name')->all();

            // $this->updateExtraField($up, $user_id, $uuid);
        }
    }
}
