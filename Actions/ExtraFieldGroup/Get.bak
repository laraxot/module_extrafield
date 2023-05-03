<?php

declare(strict_types=1);

namespace Modules\ExtraField\Actions\ExtraFieldGroup;

use Modules\ExtraField\Models\Contracts\HasExtraFieldGroupsContract;
use Modules\Xot\Datas\XotData;
use Spatie\QueueableAction\QueueableAction;

class Get
{
    use QueueableAction;

    public function execute(HasExtraFieldGroupsContract $model, string $user_id, ?string $uuid = null): array
    {
        $xot = XotData::from(config('xra'));

        $model_fields = $model->extraFields->where('pivot.user_id', $user_id);
        // $fav_groups = $model->getFavouriteGroups();
        $fav_groups = app(\Modules\ExtraField\Actions\ExtraFieldGroup\GetFavorites::class)->execute($model);
        /*
        dddx([
            'uno' => $fav_groups,
            'due' => $fav_groups1,
        ]);
        */
        $field_groups = $fav_groups->where('pivot.user_id', $user_id);

        // serve per mostrare i dati del profilo sul campo se sei su addService ad esempio
        if (0 === $field_groups->count()) {
            $field_groups = $model->extraFieldGroups->where('pivot.user_id', null);
        }

        $profile = $xot->getProfileModelByUserId($user_id);
        $profile_fields = $profile->extraFields;

        if (null != $uuid) {
            $model_fields = $model_fields->where('pivot.uuid', $uuid);
            $field_groups = $field_groups->where('pivot.uuid', $uuid);
        }

        // dd([$field_groups, $model_fields]);
        $data = $field_groups
            ->filter(
                function ($group) use ($model_fields, $profile_fields, $profile) {
                    $group->fields
                        ->map(
                            function ($field) use ($model_fields, $profile_fields, $profile, $group) {
                                $model_fields_value = $model_fields->firstWhere('id', $field->id)?->pivot?->value;

                                $profile_fields_value = $profile_fields->firstWhere('id', $field->id)?->pivot?->value;

                                $field->value = $model_fields_value ?? $profile_fields_value;

                                // uuid può essere null su service per ora ma probabilmente andrà cambiato
                                $favourite_group_uuid = $profile->getFavouriteGroups()->where('id', $group->id)->where('is_favourite', 1)->pluck('pivot.uuid')->first();
                                $field->uuid = $model_fields->firstWhere('id', $field->id)?->pivot?->uuid ?? $favourite_group_uuid;

                                return $field;
                            }
                        );

                    return $group;
                }
            )->toArray();

        return $data;
    }
}
