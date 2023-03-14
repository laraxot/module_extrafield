<?php

namespace Modules\ExtraField\Actions;

use Spatie\QueueableAction\QueueableAction;
use Modules\ExtraField\Models\ExtraFieldGroup;

class GetUserExtraFieldsDataByGroupId
{

    use QueueableAction;

    public function execute(string $group_id, string $user_id, ?string $uuid = null): array
    {
        $group = ExtraFieldGroup::find($group_id);
        //--- 
        return [];
    }
}
