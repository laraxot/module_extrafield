<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;

class GetFieldCollByUuidModelTypeModelId
{
    use QueueableAction;

    public string $uuid;
    public string $model_type;
    public string $model_id;

    /**
     * @return DataCollection<FieldData>
     */
    public function execute(string $uuid, string $model_type, string $model_id): DataCollection
    {
        $this->uuid = $uuid;
        $this->model_type = $model_type;
        $this->model_id = $model_id;

        $row = ExtraFieldGroupMorph::firstWhere(['uuid' => $uuid]);
        if (null == $row) {
            throw new \Exception('[][]');
        }
        $model = $this->getModel();
        $model_fields = $model->extraFields()->wherePivot('uuid', $uuid)->get();

        $fields = $row->extraFieldGroup?->fields;
        if (null == $fields) {
            $fields = collect([]);
        }
        $fields = $fields->map(
            function ($field) use ($model_fields, $uuid) {
                $field_arr = $field->toArray();
                $field_data = FieldData::from($field_arr);

                // TO-DO: così su Edit va bene, e su modifica servizio anche con tendina vuota su campi non obbligatori va bene
                // però mi sembra troppo arzigogolata. Controllare
                $pivot = $model_fields->where('id', $field->id)
                    ->where('pivot.uuid', $uuid)
                    ->first()
                    ?->getRelationValue('pivot') ?? $field->pivot;

                if (! $pivot instanceof ExtraFieldMorph) {
                    throw new \Exception('['.$uuid.'][]');
                }

                // $pivot = $field->pivot;
                $value = $pivot->value;
                $field_data->value = $value;

                return $field_data;
            }
        )->all();

        $field_coll = FieldData::collection($fields);

        return $field_coll;
    }

    public function getModel(): HasExtraFieldGroupsContract
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->model_type, $this->model_id);
        if (! $model instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('add on class ['.get_class($model).'] implements HasExtraFieldGroupsContract');
        }

        return $model;
    }
}
