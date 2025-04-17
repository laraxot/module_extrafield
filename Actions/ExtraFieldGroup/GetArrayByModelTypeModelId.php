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
                $group = $item;
                $item = GroupData::from($item);

                $can_verified = $group->pivot->can_verified;
                if (empty($can_verified)) {
                    $can_verified = $group->can_verified;
                }

                return [
                    'id' => $group->id,
                    'name' => $group->name,
                    'options' => $this->getOptions($group, $profile_extra_fields),
                    'value' => $group->pivot->value,
                    'uuid' => $group->pivot->uuid,
                    // gruppo con user_id null per i settaggi
                    'can_verified' => $can_verified,
                    'mandatory' => $group->pivot->mandatory ?? false,
                ];
            }
        );

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
        $values = [];

        $extra_fields = $group->fields;
        $fields_list = $extra_fields->map(
            function ($field) use ($profile_extra_fields) {
                return $profile_extra_fields->where('id', $field->id);
            }
        );

        foreach ($fields_list as $profile_fields) {
            foreach ($profile_fields as $field) {
                $field_uuid = $field->pivot->uuid;

                $can_verified = $group->pivot->can_verified;
                if (empty($can_verified)) {
                    $can_verified = $group->can_verified;
                }

                if (
                    true != $can_verified || (true == $can_verified && null != $field->pivot->groupMorph && null != $field->pivot->groupMorph->verified_at)
                ) {
                    if (strlen(strval($field_uuid)) < 2) {
                        $field->pivot->update(['uuid' => Str::uuid()]);
                    }

                    $v = $field->pivot->value;

                    $found_key = array_search($field_uuid, array_column($values, 'id'));

                    // TO-DO in questi casi che è false attenzione all'operatore logico. E' differente false e 0. da Davide
                    // NB. E' molto meglio fare l'array così perchè così si può ordinare per preferiti e comunque in modo più semplice
                    // visto che già la select prevede già gli array associativi
                    if (false === $found_key) {
                        $values[] = [
                            'id' => $field_uuid,
                            'favourite' => $field->pivot->groupMorph->favourite,
                            'value' => $field_uuid,
                            'name' => '',
                            'disabled' => '',
                        ];

                        $found_key = array_key_last($values);
                    }

                    // echo 'Found Key: '.$found_key.' on Id:'.$field_uuid.'<br>';

                    // TO-TO: se favourite = 1 porta a primo campo.
                    // difficile farlo su un array con indice uuid però
                    // mi sa che dovrò farlo come collection
                    $values[$found_key]['name'] .= $v.' ';
                }
            }
        }

        array_multisort(array_column($values, 'favourite'), SORT_DESC, $values);

        return $values;
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
