<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Spatie\QueueableAction\QueueableAction;

class DeleteByUuid
{
    use QueueableAction;

    public function execute(string $uuid): void
    {
        $extra_field_group_morphs = ExtraFieldGroupMorph::where(['uuid' => $uuid])->get();
        $extra_field_morphs = ExtraFieldMorph::where(['uuid' => $uuid])->get();

        // dddx([$uuid, $extra_field_morphs, $extra_field_group_morphs]);

        foreach ($extra_field_group_morphs as $item) {
            $item->delete();
        }

        foreach ($extra_field_morphs as $item) {
            $item->delete();
        }
    }
}
