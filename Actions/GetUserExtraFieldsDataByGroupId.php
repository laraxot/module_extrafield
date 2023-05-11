<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions;

use Modules\ExtraField\Models\ExtraFieldGroup;
use Spatie\QueueableAction\QueueableAction;

class GetUserExtraFieldsDataByGroupId
{
    use QueueableAction;

    public function execute(string $group_id, string $user_id, ?string $uuid = null): array
    {
        $group = ExtraFieldGroup::find($group_id);
        // ---
        return [];
    }
}
