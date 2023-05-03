<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetByModelTypeCategoryId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $model_type, string $cat_id)
    {
        $res = ExtraFieldGroup::withAnyCategories($cat_id)
            ->get();
        dddx('WIP');

        return $res;
    }
}
