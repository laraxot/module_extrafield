<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetBuilderByCategoryId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $cat_id): Builder
    {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $groups = ExtraFieldGroup::whereHas('fields', function ($query) use ($cat_id) {
            $query->withAnyCategories($cat_id);
        });

        return $groups;
    }
}
