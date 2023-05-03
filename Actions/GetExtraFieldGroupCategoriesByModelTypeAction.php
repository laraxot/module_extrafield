<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Modules\Blog\Models\Category;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetExtraFieldGroupCategoriesByModelTypeAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     *
     * @return EloquentCollection<Category>
     */
    public function execute(string $model_type): EloquentCollection
    {
        $categories = Category::ofType($model_type)
            ->ofType('extra_field_group')
            // ->defaultOrder() //kelnoy ma non fa quello che vogliamo noi
            ->ordered()
            ->get();

        $categories = $categories->map(
            function ($item) {
                $item->setAttribute('e_counts', $item->entries(ExtraFieldGroup::class)->count());

                return $item;
            })->filter(function ($item) {
                // Access to an undefined property Modules\Blog\Models\Category::$e_counts.
                return $item->e_counts > 0;
            });

        return $categories;
    }
}
