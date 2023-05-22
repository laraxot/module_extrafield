<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Modules\ExtraField\Datas\GroupData;
use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\UI\Datas\FieldData;
use Modules\Xot\Actions\GetModelByModelTypeAction;
use Modules\Xot\Datas\XotData;
use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;

class GetArrayByModelTypeModelId
{
    use QueueableAction;

    public string $model_id;
    public string $model_type;
    public string $user_id;

    /**
     * Undocumented function.
     */
    public function execute(string $model_type, string $model_id, ?string $user_id = ''): array
    {
        $this->model_type = $model_type;
        $this->model_id = $model_id;
        $this->user_id = $user_id;

        // non è più extra field il core dell'applicazione ma extra field groups
        // $model = $this->getModel();
        // $model_extra_fields = $model->extraFieldsByUserId($user_id)->get();
        $profile = $this->getProfile((string) Auth::id());

        // l'id dell'utente qui dev'esserci sempre nei campi del profile
        $profile_extra_fields = $profile->extraFieldsByUserId((string) Auth::id())->get();

        /** @var EloquentCollection */

        // se non mettiamo lo user_id allora non fa modificare il campo in edit, ma se lo mettiamo non funziona bene l'add
        // probabilmente servono due azioni separate oppure un parametro. ho optato per il parametro. da davide

        // NB non esistono extra_field_groups con user_id se il service è appena stato creato quindi non vedi le opzioni nei campi
        // ma solo select vuote
        $extra_field_groups = app(GetByModelTypeModelIdUserId::class)->execute($model_type, $model_id, $user_id);
        $res = $extra_field_groups->map(
            function ($item) use ($profile_extra_fields) {
                /** @var ExtraFieldGroup */
                $i = $item;
                $item = GroupData::from($item);

                return [
                    'id' => $i->id,
                    'name' => $i->name,
                    'options' => $this->getOptions($i, $profile_extra_fields),
                    'value' => $item->pivot->value,
                    'uuid' => $item->pivot->uuid,
                    'can_verified' => $item->pivot->can_verified,
                ];
            }
        );
        // dd([$extra_field_groups, $profile_extra_fields, $user_id, $res->all()]);

        return $res->all();
    }

    public function getProfile(string $user_id): HasExtraFieldGroupsContract
    {
        $xot = XotData::make();
        $profile = $xot->getProfileModelByUserId($user_id);

        if (! $profile instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('[][]');
        }

        return $profile;
    }

    public function getModel(): HasExtraFieldGroupsContract
    {
        $model = app(GetModelByModelTypeAction::class)->execute($this->model_type, $this->model_id);
        if (! $model instanceof HasExtraFieldGroupsContract) {
            throw new \Exception('add on model ['.get_class($model).'] implements HasExtraFieldGroupsContract');
        }

        return $model;
    }

    public function getOptions(ExtraFieldGroup $group, EloquentCollection $profile_extra_fields): array
    {
        $extra_fields = $group->fields;
        $data = $extra_fields->map(
            function ($field) use ($profile_extra_fields) {
                return $profile_extra_fields->where('id', $field->id);
            }
        );
        $name = [];
        foreach ($data as $v) {
            foreach ($v as $v1) {
                $k = $v1->pivot->uuid;
                if (strlen(strval($k)) < 2) {
                    $v1->pivot->update(['uuid' => Str::uuid()]);
                }
                $v = $v1->pivot->value;
                if (! isset($name[$k])) {
                    $name[$k] = '';
                }
                $name[$k] .= $v.' ';
            }
        }

        return $name;
    }

    /**
     * @return DataCollection<FieldData>
     */
    public function getFielCollByFields(ExtraFieldGroup $group, EloquentCollection $model_extra_fields, EloquentCollection $profile_extra_fields)
    {
        $extra_fields = $group->fields;
        // $uuid = $group->uuid;

        $data = $extra_fields->map(
            function ($field) use ($model_extra_fields, $profile_extra_fields) {
                /** @var ExtraFieldMorph */
                $model_pivot = $model_extra_fields->where('id', $field->id)->first()?->getRelationValue('pivot');
                $model_value = $model_pivot->value;
                /** @var ExtraFieldMorph */
                $profile_pivot = $profile_extra_fields->where('id', $field->id)->first()?->getRelationValue('pivot');
                $profile_value = $profile_pivot->value;
                $value = $model_value ?? $profile_value;
                $field_arr = $field->toArray();
                $field_arr['value'] = $value;
                $field_data = FieldData::from($field_arr);

                return $field_data;
            }
        )->all();

        return FieldData::collection($data);
    }
}
