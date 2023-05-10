<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Str;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Spatie\QueueableAction\QueueableAction;

class Create
{
    use QueueableAction;

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function execute(Model $model, string $extra_field_group_id, string $user_id, array $form_data, ?string $uuid = null, ?bool $verified = false)
    {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $model_type = Str::snake(class_basename($model));
        $model_id = ''.$model->getKey();

        if (null == $uuid) {
            $uuid = Str::uuid();
        }

        $extra_field_group = ExtraFieldGroup::findOrFail($extra_field_group_id);

        ExtraFieldGroupMorph::create([
            'model_type' => $model_type,
            'model_id' => $model_id,
            'user_id' => $user_id,
            'extra_field_group_id' => $extra_field_group_id,
            'value' => $form_data,
            'uuid' => $uuid,
            'note' => $form_data['note'] ?? '',
            'is_verified' => $verified,
        ]);

        foreach ($extra_field_group->fields as $field) {
            $value = collect($form_data)->get($field->name);
            if (is_array($value)) {
                $value = json_encode($value);
            }
            ExtraFieldMorph::create([
                'model_type' => $model_type,
                'model_id' => $model_id,
                'user_id' => $user_id,
                'extra_field_id' => $field->id,
                'value' => $value,
                'uuid' => $uuid,
            ]);
        }
    }
}
