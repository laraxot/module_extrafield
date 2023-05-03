<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Actions;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetOptionsByModelTypeModelIdCategoryIdUserId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $model_type, ?string $model_id, string $cat_id, string $user_id): array
    {
        $groups = app(Actions\ExtraFieldGroup\GetBuilderByModelTypeModelIdCategoryId::class)->execute($model_type, $model_id, $cat_id);
        $groups = $groups->get()->map(function ($item) use ($user_id) {
            if (! $item instanceof ExtraFieldGroup) {
                throw new \Exception('[][]');
            }
            $cardinality = $item->noUserExtraFieldGroupMorphs->first()?->cardinality ?? 0;
            $count = $item->userExtraFieldGroupMorphs($user_id)->count();

            $name = $item->name;
            if ($cardinality > 0) {
                $name .= ' ['.$count.'/'.$cardinality.']';
            }

            return [
                'id' => $item->id,
                'name' => $name,
                'disabled' => $cardinality > 0 && $count >= $cardinality,
            ];
        });

        return $groups->all();
    }
}
