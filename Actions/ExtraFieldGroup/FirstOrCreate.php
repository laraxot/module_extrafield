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

class FirstOrCreate
{
    use QueueableAction;

    /**
     * DA FARE.
     * E' per inserire i dati del servizio solo se non ce ne sono già associati allo stesso id di servizio,
     * altrimenti deve sovrascrivere.
     *
     * @return void
     */
    public function execute(Model $model, string $extra_field_group_id, string $user_id, array $form_data)
    {
        $morph_map = [
            'extra_field' => 'Modules\ExtraField\Models\ExtraField',
        ];

        Relation::morphMap($morph_map);

        $model_type = Str::snake(class_basename($model));
        $model_id = ''.$model->getKey();

        $uuid = Str::uuid();
        $extra_field_group = ExtraFieldGroup::findOrFail($extra_field_group_id);

        ExtraFieldGroupMorph::create([
            'model_type' => $model_type,
            'model_id' => $model_id,
            'user_id' => $user_id,
            'extra_field_group_id' => $extra_field_group_id,
            'value' => $form_data,
            'uuid' => $uuid,
            'note' => $form_data['note'] ?? '',
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
