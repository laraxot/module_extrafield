<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Modules\Xot\Datas\XotData;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;

class GetArrayByModelTypeModelId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $model_type, string $model_id): array
    {
        $xot = XotData::make();
        $user_id = strval(Auth::id());
        $model = app(GetModelByModelTypeAction::class)->execute($model_type, $model_id);
        $model_extra_fields = $model->extraFieldsByUserId($user_id)->get();
        $profile = $xot->getProfileModelByUserId($user_id);
        $profile_extra_fields = $profile->extraFieldsByUserId($user_id)->get();

        $extra_field_groups = app(GetByModelTypeModelId::class)->execute($model_type, $model_id);

        $res = $extra_field_groups->map(
            function ($item) use ($profile_extra_fields) {
                return [
                    'id' => $item->id,
                    'uuid' => $item->uuid,
                    'name' => $item->name,
                    'options' => $this->getOptions($item, $profile_extra_fields),
                    // 'fields' => $this->getFielCollByFields($item, $model_extra_fields, $profile_extra_fields)->toArray(),
                ];
            }
        );

        return $res->all();
    }

    public function getOptions(ExtraFieldGroup $group, $profile_extra_fields): array
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
    public function getFielCollByFields($group, $model_extra_fields, $profile_extra_fields): DataCollection
    {
        $extra_fields = $group->fields;
        $uuid = $group->uuid;

        $data = $extra_fields->map(
            function ($field) use ($model_extra_fields, $profile_extra_fields) {
                $model_value = $model_extra_fields->where('id', $field->id)/* ->where('pivot.uuid', $uuid) */ ->first()?->pivot->value;
                $profile_value = $profile_extra_fields->where('id', $field->id)/* ->where('pivot.uuid', $uuid) */ ->first()?->pivot->value;
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
