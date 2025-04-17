<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Relations\Relation;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\UI\Datas\FieldData;
use Spatie\QueueableAction\QueueableAction;

class GetFieldsArrayByGroupId
{
    use QueueableAction;

    /**
     * Undocumented function.
     */
    public function execute(string $group_id): array
    {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $rows = ExtraFieldGroup::findOrFail($group_id)->fields;

        $fields = FieldData::collection($rows->all())->toArray();

        return $fields;
    }
}
