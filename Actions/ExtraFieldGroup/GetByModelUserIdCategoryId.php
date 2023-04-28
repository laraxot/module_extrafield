<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Collection;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Spatie\QueueableAction\QueueableAction;

class GetByModelUserIdCategoryId
{
    use QueueableAction;

    public function execute(HasExtraFieldGroupsContract $model, string $user_id, string $cat_id): Collection
    {
        $res = $model->extraFieldGroups()
            ->wherePivot('user_id', $user_id)
            ->wherePivot('uuid', '!=', '')
            ->withAnyCategories($cat_id)
            ->get();

        return $res;
    }
}
