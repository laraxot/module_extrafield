<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Modules\Xot\Datas\XotData;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;

class GetArrayByModelTypeModelId
{
    use QueueableAction;

    public string $model_id;
    public string $model_type;
    public string $user_id;

    /**
     * Undocumented function.
     */
    public function execute(string $model_type, string $model_id): array
    {
        $user_id = strval(Auth::id());
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->user_id = $user_id;

        $model = $this->getModel();
        $model_extra_fields = $model->extraFieldsByUserId($user_id)->get();
        $profile = $this->getProfile();

        $profile_extra_fields = $profile->extraFieldsByUserId($user_id)->get();

        /** @var EloquentCollection */
        $extra_field_groups = app(GetByModelTypeModelId::class)->execute($model_type, $model_id);

        $res = $extra_field_groups->map(
            function ($item) use ($profile_extra_fields) {
                /** @var ExtraFieldGroup */
                $i = $item;
                // dddx($i);

                return [
                    'id' => $i->id,
                    // 'uuid' => $i->uuid, // Access to an undefined property Modules\ExtraField\Models\ExtraFieldGroup::$uuid.
                    'name' => $i->name,
                    'options' => $this->getOptions($i, $profile_extra_fields),
                ];
            }
        );

        return $res->all();
    }

    public function getProfile(): HasExtraFieldGroupsContract
    {
        $xot = XotData::make();
        $profile = $xot->getProfileModelByUserId($this->user_id);
        if (! $profile instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('[][]');
        }

        return $profile;
    }

    public function getModel(): HasExtraFieldGroupsContract
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->model_type, $this->model_id);
        if (! $model instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('add on model ['.get_class($model).'] implements HasExtraFieldGroupsContract');
        }

        return $model;
    }

    public function getOptions(ExtraFieldGroup $group, EloquentCollection $profile_extra_fields): array
    {
        $extra_fields = $group->fields;
        $data = $extra_fields->map(
            function ($field) use ($profile_extra_fields) {
                return $profile_extra_fields->where('id', $field->id);
            }
        );
        $name = [];
        foreach ($data as $v) {
            foreach ($v as $v1) {
                $k = $v1->pivot->uuid;
                if (strlen(strval($k)) < 2) {
                    $v1->pivot->update(['uuid' => Str::uuid()]);
                }
                $v = $v1->pivot->value;
                if (! isset($name[$k])) {
                    $name[$k] = '';
                }
                $name[$k] .= $v.' ';
            }
        }

        return $name;
    }

    /**
     * @return DataCollection<FieldData>
     */
    public function getFielCollByFields(ExtraFieldGroup $group, EloquentCollection $model_extra_fields, EloquentCollection $profile_extra_fields)
    {
        $extra_fields = $group->fields;
        // $uuid = $group->uuid;

        $data = $extra_fields->map(
            function ($field) use ($model_extra_fields, $profile_extra_fields) {
                /** @var ExtraFieldMorph */
                $model_pivot = $model_extra_fields->where('id', $field->id)->first()?->getRelationValue('pivot');
                $model_value = $model_pivot->value;
                /** @var ExtraFieldMorph */
                $profile_pivot = $profile_extra_fields->where('id', $field->id)->first()?->getRelationValue('pivot');
                $profile_value = $profile_pivot->value;
                $value = $model_value ?? $profile_value;
                $field_arr = $field->toArray();
                $field_arr['value'] = $value;
                $field_data = FieldData::from($field_arr);
                /* 4 debug
                if (1 == $group->id) {
                    dddx([
                        'group' => $group,
                        'model_value' => $model_value,
                        'profile_value' => $profile_value,
                        'field_data' => $field_data,
                    ]);
                }
                */
                return $field_data;
            }
        )->all();

        return FieldData::collection($data);
    }
}
