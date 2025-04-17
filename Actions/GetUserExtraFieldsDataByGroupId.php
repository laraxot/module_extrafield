<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions;

use Illuminate\Database\Eloquent\Collection;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Spatie\QueueableAction\QueueableAction;

class GetUserExtraFieldsDataByGroupId
{
    use QueueableAction;

    public function execute(string $group_id, ?string $user_id, ?string $model_type = null, ?string $uuid = null): Collection
    {
        $query = ExtraFieldGroupMorph::where(['extra_field_group_id' => $group_id, 'user_id' => $user_id])->with('fieldMorph');

        if (null !== $model_type) {
            $query = $query->where('model_type', $model_type);
        } else {
            $query = $query->where('value', '!=', '[]');
        }

        if (null !== $uuid) {
            $query = $query->where('uuid', $uuid);
        }

        $coll = $query->get();

        return $coll;
    }
}
