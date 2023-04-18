<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\QueueableAction\QueueableAction;

class GetFavorites {
    use QueueableAction;

    public function execute(Model $model, ?string $cat_id = null): Collection {
        $tmp_groups = $model->extraFieldGroups();
        if (null != $cat_id) {
            $tmp_groups = $tmp_groups->withAnyCategories($cat_id);
        }
        $groups = $tmp_groups->get();

        $iterated_groups = [];

        $groups = $groups->map(function ($group) use (&$iterated_groups, $tmp_groups, $cat_id, $model) {
            if (1 == $group->cardinality) {
                $group->is_favourite = true;
            } else {
                $tmp_groups = $model->extraFieldGroups();
                if (null != $cat_id) {
                    $tmp_groups = $tmp_groups->withAnyCategories($cat_id);
                }
                $favourite_group = $tmp_groups->where('extra_field_groups.id', $group->id)->wherePivot('favourite', 1)->first();

                if (null != $favourite_group && $favourite_group->pivot->uuid == $group->pivot->uuid) {
                    $group->is_favourite = true;
                } elseif (null == $favourite_group && ! isset($iterated_groups[$group->id])) {
                    $group->is_favourite = true;
                }
            }
            $iterated_groups[$group->id] = true;

            return $group;
        })->sortBy('name');

        return $groups;
    }
}
