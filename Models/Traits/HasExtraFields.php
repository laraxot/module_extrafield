<?php
/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Illuminate\Support\Str;
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

    public function userExtraFields(): MorphToMany {
        return $this->extraFields()
            ->wherePivot('user_id', Auth::id());
    }

    // c'è qualcosa di sbagliato. legge il gruppo da group_id di extrafield ma deve leggerlo da polimorfica
    public function extraFieldsFromGroups() {
        return $this->hasManyDeepFromRelations($this->extraFieldGroups(), (new ExtraFieldGroup())->fields()->wherePivot('user_id', Auth::id()))->withIntermediate(ExtraFieldGroup::class);
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

    public function updateExtraField(array $data, string $user_id, ?string $uuid=null) {
        //dddx([$data, $user_id,  $uuid]);
        $model_type = Str::snake(class_basename($this));
        $model_id = (string) $this->getKey();

        //$fields = $this->extraFields->where('pivot.user_id', $user_id)->where('pivot.uuid', $uuid);
        $fields = $this->extraFields->where('pivot.user_id', '');

        if($uuid==null){
            $uuid = Str::uuid();
        }

        foreach ($fields as $field) {
            $value = collect($data)->get($field->name);
        
            $res=ExtraFieldMorph::firstOrCreate([
                'model_id' => $model_id,
                'model_type' => $model_type,
                'user_id' => $user_id,
                'extra_field_id' => $field->id,
                'uuid' => $uuid,
            ]);
            
            $res= tap($res)->update([
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

    public function addExtraField(array $data, string $user_id, string $group_id) {
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

    public function getExtraFieldValue(string $user_id, ?string $uuid = null) {
        $model_fields = $this->extraFields
                ->where('pivot.user_id', $user_id); 
              

        $field_groups = $this->extraFieldGroups
                ->where('pivot.user_id', $user_id);

        //dddx($field_groups);
        
        $profile_fields = ProfileService::make()->getProfile()->extraFields;
        if($uuid != null){
            $model_fields = $model_fields->where('pivot.uuid', $uuid);
            $field_groups = $field_groups->where('pivot.uuid', $uuid);
        }
        // dddx($profile_fields);
        // dddx($field_groups);
        $data = $field_groups
                ->map(
                    function ($group) use ($model_fields, $profile_fields) {
                        $group->fields
                        ->map(
                            function ($field) use ($model_fields, $profile_fields) {
                                $model_fields_value = $model_fields->firstWhere('id', $field->id)?->pivot?->value;
                                $profile_fields_value = $profile_fields->firstWhere('id', $field->id)?->pivot?->value;
                                $field->value = $model_fields_value ?? $profile_fields_value;
                                // dddx([
                                //     'profile_fields'=>$profile_fields,
                                //     'field' => $field,
                                //     'test' => $profile_fields->firstWhere('id', $field->id),
                                // ]);
                                return $field;
                            });

                        return $group;
                    })->toArray();

        return $data;
    }

    public function getExtraFieldFormData(string $user_id, ?string $uuid = null): array{
        $tmp = $this->getExtraFieldValue($user_id, $uuid);
        $data = [];

        foreach($tmp as $item){
            foreach($item['fields'] as $field){
                $k = $field['name'];
                $v = $field['value'];
                if(isJson($v)){
                    $v = json_decode($v);
                }
                $data[$k] = $v;
            }
        }
        return $data;
    }

    public function addExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null){
        $extra_field_groups = $this->extraFieldGroups
                    ->where('pivot.user_id', '');

        foreach($extra_field_groups as $group){
            $fields = $group->fields->where('pivot.user_id', '');
            $up = $fields->map(function($item) use ($data){
                $item->value = collect($data)->get($item->name);
                return $item;
                
            })->pluck('value', 'name')->all();
            $this->addExtraField($up, $user_id, (string) $group->id);
        }
    }

    public function updateExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null){
        $extra_field_groups = $this->extraFieldGroups->where('pivot.user_id', '');

        foreach($extra_field_groups as $group){
            $fields = $group->fields->where('pivot.user_id', '');
            $up = $fields->map(function($item) use ($data,$user_id,$uuid){
                $item->value = collect($data)->get($item->name);

                $res=ExtraFieldMorph::firstOrCreate([
                    'model_id' => $this->getKey(),
                    'model_type' => Str::snake(class_basename($this)),
                    'user_id' => $user_id,
                    'extra_field_id' => $item->id,
                    // 'uuid' => $uuid,
                ]);
                
                $res=tap($res)->update([
                    'value' => $item->value
                ]);

                return $item;
                
            })->pluck('value', 'name')->all();

            $this->updateExtraField($up, $user_id, $uuid);
        }
    }

    public function updateExtraFieldByGroupTest(array $data, string $user_id, ?string $uuid = null){
        
        $extra_field_groups = $this->extraFieldGroups->where('pivot.uuid', $uuid);

        //dd($extra_field_groups);
        foreach($extra_field_groups as $group){
            $fields = $group->fields->where('pivot.user_id', '');

          // dd($fields);
            
            $up = $fields->map(function($item) use ($data,$user_id,$uuid){

                Debugbar::info($item->name);
                
                $item->value = collect($data)->get($item->name);

                $res=ExtraFieldMorph::firstOrCreate([
                    'model_id' => $this->getKey(),
                    'model_type' => Str::snake(class_basename($this)),
                    'user_id' => $user_id,
                    'extra_field_id' => $item->id,
                    'uuid' => $uuid,
                ]);
                
                $res=tap($res)->update([
                    'value' => $item->value
                ]);

                return $item;
                
            })->pluck('value', 'name')->all();

           // $this->updateExtraField($up, $user_id, $uuid);
        }
    }
}
