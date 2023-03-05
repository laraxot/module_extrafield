<?php
/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Str;
use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\LU\Services\ProfileService;

trait HasExtraFields {
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function extraFields(): MorphToMany {
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

    // c'è qualcosa di sbagliato. legge il gruppo da group_id di extrafield ma deve leggerlo da polimorfica
    public function extraFieldsFromGroups() {
        return $this->hasManyDeepFromRelations($this->extraFieldGroups(), (new ExtraFieldGroup())->fieldsNew()->wherePivot('user_id', null))->withIntermediate(ExtraFieldGroup::class);
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

    public function updateExtraField(array $data, string $user_id) {
        $model_type = Str::snake(class_basename($this));
        $model_id = (string) $this->getKey();

        $groups = $this->extraFieldGroups;
        foreach ($groups as $group) {
            foreach ($group->fields as $field) {
                $value = collect($data)->get($field->name);
                $find = [
                    'model_id' => $model_id,
                    'model_type' => $model_type,
                    'user_id' => $user_id,
                    'extra_field_id' => $field->id,
                ];
                $up = [
                    'value' => $value,
                ];
                $extrafieldmorph = ExtrafieldMorph::firstOrCreate($find, $up);
                $extrafieldmorph->update($up);

                // dddx([
                //     'extrafieldmorph' => $extrafieldmorph,
                //     'value' => $value,
                //     'field' => $field,
                //     'data' => $data,
                //     'find' => $find,
                //     'up' => $up,
                // ]);
                // $field->pivot->updateUserValue($this->user_id, $value);
                // dddx($value);
                // dddx($this->extraFields);
                // $field_obj = $this->extraFields()->wherePivot('user_id', $user_id)->firstOrCreate(['name' => $field->name]);
                // // dddx($field_obj);
                // $this->extraFields()->syncWithoutDetaching($field_obj->id, ['value' => $value, 'user_id' => $user_id]);
            }
        }
    }

    public function getExtraFieldValue(string $user_id) {
        $model_fields = $this->extraFields->where('pivot.user_id', $user_id);
        $profile_fields = ProfileService::make()->getProfile()->extraFields;
        $data = $this->extraFieldGroups
        ->map(
            function ($group) use ($model_fields, $profile_fields) {
                $group->fields
                ->map(
                    function ($field) use ($model_fields, $profile_fields) {
                        $model_fields_value = $model_fields->firstWhere('id', $field->id)?->pivot?->value;
                        $profile_fields_value = $profile_fields->firstWhere('id', $field->id)?->pivot?->value;
                        $field->value = $model_fields_value ?? $profile_fields_value;

                        return $field;
                    });

                return $group;
            })->toArray();

        return $data;
    }
}
