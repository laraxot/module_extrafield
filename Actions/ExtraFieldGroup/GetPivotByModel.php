<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class GetPivotByModel
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(Model $model): Collection
    {
        $extraFieldGroupsNoUserId = $model->extraFieldGroups()->wherePivot('user_id', null)->get();

        return $extraFieldGroupsNoUserId;
    }
}
