<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Models\Contracts\HasExtraFieldsContract;
use Spatie\QueueableAction\QueueableAction;

class GetByModelUserIdCategoryId
{
    use QueueableAction;

    public function execute(HasExtraFieldsContract $model, string $user_id, string $cat_id)
    {
        $res = $model->extraFieldGroups()
            ->wherePivot('user_id', $user_id)
            ->wherePivot('uuid', '!=', '')
            ->withAnyCategories($cat_id)
            ->get();

        return $res;
    }
}
