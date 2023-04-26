<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetBuilderByModelTypeModelIdCategoryId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $model_type, ?string $model_id, string $cat_id): Builder
    {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $groups = ExtraFieldGroup::with(
            [
                'noUserExtraFieldGroupMorphs' => function ($q) use ($model_type, $model_id) {
                    $q->where('model_type', $model_type)->where('model_id', $model_id);
                },
            ]
        )
        ->withAnyCategories($cat_id);

        return $groups;
    }
}
