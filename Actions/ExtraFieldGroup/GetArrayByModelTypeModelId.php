<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Support\Facades\Auth;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Modules\Xot\Datas\XotData;
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
            function ($item) use ($model_extra_fields, $profile_extra_fields) {
                // dddx($item->fieldDataCollection($user_id, $model));
                // dddx($item->userValue($user_id));

                return [
                    'id' => $item->id,
                    'uuid' => $item->uuid,
                    'name' => $item->name,
                    'fields' => $this->getFielCollByFields($item, $model_extra_fields, $profile_extra_fields),
                ];
            }
        );

        return $res->all();
    }

    public function getFielCollByFields($group, $model_extra_fields, $profile_extra_fields)
    {
        $extra_fields = $group->fields;
        $data = $extra_fields->map(
            function ($field) use ($model_extra_fields, $profile_extra_fields) {
                dddx([
                    'a' => $field,
                    'b' => $model_extra_fields->where('id', $field->id),
                    'c' => $profile_extra_fields->where('id', $field->id),
                ]);
            }
        );
    }
}
