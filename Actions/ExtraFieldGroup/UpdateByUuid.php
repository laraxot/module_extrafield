<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Models\ExtraFieldMorph;
use Spatie\QueueableAction\QueueableAction;

class UpdateByUuid
{
    use QueueableAction;

    public function execute(string $uuid, array $form_data): bool
    {
        foreach ($form_data as $index => $value) {
            ExtraFieldMorph::whereHas('extraField', function ($q) use ($index) {
                $q->where('name', $index);
            })->where(['uuid' => $uuid])->update(['value' => $value]);
        }

        return true;
    }
}
