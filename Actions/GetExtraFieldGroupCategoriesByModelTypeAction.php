<?php

namespace Modules\ExtraField\Actions;

use Modules\Blog\Models\Category;
use Spatie\QueueableAction\QueueableAction;
use Modules\ExtraField\Models\ExtraFieldGroup;

class GetExtraFieldGroupCategoriesByModelTypeAction
{

    use QueueableAction;

    public function execute(string $model_type)
    {
        $categories = Category::ofType($model_type)
            ->ofType('extra_field_group')
            ->get()
            ->map(function ($item) {
                $item->e_counts = $item->entries(ExtraFieldGroup::class)->count();
                return $item;
            })->filter(function ($item) {
                return $item->e_counts > 0;
            });


        return $categories;
    }
}
