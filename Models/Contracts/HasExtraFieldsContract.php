<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Contracts;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\ExtraField\Models\ExtraField;
use Modules\PFed\Models\Consent;

/**
 * @property string                              $name
 * @property EloquentCollection<int, ExtraField> $extraFields
 * @property EloquentCollection<int, Consent>    $consents
 */
interface HasExtraFieldsContract
{
    public function extraFields(): MorphToMany;

    public function userExtraFields(?string $user_id = ''): MorphToMany;

    public function extraFieldsFromGroups();

    public function noUserExtraFields();

    public function userExtraFieldGroups(string $user_id);

    public function noUserExtraFieldGroups();

    public function extraFieldGroups(): MorphToMany;

    public function getFavouriteGroups(?string $cat_id = null);

    public function setFavouriteGroup(string $group_id, string $uuid): void;

    public function updateUserExtraField(array $data, string $user_id, ?string $uuid = null);

    public function addExtraField(array $data, string $user_id, string $group_id, ?string $note = '');

    public function getProfileExtraFieldOptions(string $user_id, ?string $uuid = null);

    public function getProfileExtraFieldGroupsOptions(string $user_id, ?string $uuid = null);

    public function getUserExtraFieldValue(string $user_id, ?string $uuid = null);

    public function getExtraFieldValue();

    public function getExtraFieldRules($form_data): array;

    public function getUserExtraFieldGroupsFormData(string $user_id, ?string $uuid = null): array;

    public function getUserExtraFieldFormData(string $user_id, ?string $uuid = null): array;

    public function addExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null);

    public function updateUserExtraFieldByGroupAndProfileFieldUuid(array $uuid_data, string $user_id);

    public function updateUserExtraFieldByGroup(array $data, string $user_id, ?string $uuid = null);

    public function updateUserExtraFieldByGroupTest(array $data, string $user_id, ?string $uuid = null);

    // public function consents(): HasMany;

    // public function getMandatoryConsentsFormDataRules(): array;
}
