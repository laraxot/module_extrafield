<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Spatie\QueueableAction\QueueableAction;

class GetFormData
{
    use QueueableAction;

    public function execute(HasExtraFieldGroupsContract $model, string $user_id, string $uuid): array
    {
        $tmp = app(\Modules\ExtraField\Actions\ExtraFieldGroup\Get::class)->execute($model, $user_id, $uuid);
        $data = [];

        foreach ($tmp as $item) {
            if (is_iterable($item['fields'])) {
                foreach ($item['fields'] as $field) {
                    $k = $field['name'];
                    $v = $field['value'];

                    if (isJson($v)) {
                        $v = json_decode($v);
                    }
                    $data[$k] = $v;
                }
            }
        }

        // dd($data);
        return $data;
    }
}
