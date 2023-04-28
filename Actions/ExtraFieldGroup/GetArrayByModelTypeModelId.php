<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Support\Facades\Auth;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Spatie\QueueableAction\QueueableAction;

class GetArrayByModelTypeModelId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $model_type, string $model_id): array
    {
        // $model = app(GetModelByModelTypeAction::class)->execute($model_type, $model_id);
        $extra_field_groups = app(GetByModelTypeModelId::class)->execute($model_type, $model_id);
        $user_id = strval(Auth::id());
        $res = $extra_field_groups->map(
            function ($item) use ($user_id) {
                // dddx($item->fieldDataCollection($user_id, $model));
                dddx($item->userValue($user_id));

                return [
                    'id' => $item->id,
                    'uuid' => $item->uuid,
                    'name' => $item->name,
                    'fields' => FieldData::collection($item->fields->all())->toArray(),
                ];
            }
        );

        return $res->all();
    }
}
