<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions;

use Illuminate\Support\Collection;
use Modules\Blog\Models\Category;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetExtraFieldGroupCategoriesByModelTypeAction
{
    use QueueableAction;

    public function execute(string $model_type): Collection
    {
        $categories = Category::ofType($model_type)
            ->ofType('extra_field_group')
            ->get()
            ->map(
                function ($item) {
                    $item->e_counts = $item->entries(ExtraFieldGroup::class)->count();

                    return $item;
                })->filter(function ($item) {
                    // Access to an undefined property Modules\Blog\Models\Category::$e_counts.
                    return $item->e_counts > 0;
                });

        return $categories;
    }
}
