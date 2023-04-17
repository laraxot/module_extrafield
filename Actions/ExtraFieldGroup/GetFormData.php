<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Model;
use Spatie\QueueableAction\QueueableAction;

class GetFormData {
    use QueueableAction;

    public function execute(Model $model, string $user_id, string $uuid): array {
        $tmp = app(\Modules\ExtraField\Actions\ExtraFieldGroup\Get::class)->execute($model, $user_id, $uuid);
        $data = [];

        foreach ($tmp as $item) {
            foreach ($item['fields'] as $field) {
                $k = $field['name'];
                $v = $field['value'];

                if (isJson($v)) {
                    $v = json_decode($v);
                }
                $data[$k] = $v;
            }
        }

        // dd($data);
        return $data;
    }
}
