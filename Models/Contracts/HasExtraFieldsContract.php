<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Contracts;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Collection;
use Modules\ExtraField\Models\ExtraField;
use Modules\PFed\Models\Consent;
use Modules\Xot\Contracts\ModelContract;

/**
 * @property string                              $name
 * @property EloquentCollection<int, ExtraField> $extraFields
 * @property EloquentCollection<int, Consent>    $consents
 */
interface HasExtraFieldsContract extends ModelContract
{
    public function extraFields(): MorphToMany;

    public function userExtraFields(?string $user_id = ''): MorphToMany;

    /**
     * @return \Staudenmeir\EloquentHasManyDeep\HasManyDeep
     */
    public function extraFieldsFromGroups();

    public function noUserExtraFields(): MorphToMany;

    public function userExtraFieldGroups(string $user_id): MorphToMany;

    public function noUserExtraFieldGroups(): MorphToMany;

    public function extraFieldGroups(): MorphToMany;

    public function getFavouriteGroups(string $cat_id = null): Collection;

    public function setFavouriteGroup(string $group_id, string $uuid): void;

    public function updateUserExtraField(array $data, string $user_id, string $uuid = null): void;

    public function addExtraField(array $data, string $user_id, string $group_id, ?string $note = ''): void;

    public function getProfileExtraFieldOptions(string $user_id, string $uuid = null): array;

    public function getProfileExtraFieldGroupsOptions(string $user_id, string $uuid = null): array;

    public function getUserExtraFieldValue(string $user_id, string $uuid = null): array;

    public function getExtraFieldValue(): EloquentCollection;

    public function getExtraFieldRules(array $form_data): array;

    public function getUserExtraFieldGroupsFormData(string $user_id, string $uuid = null): array;

    public function getUserExtraFieldFormData(string $user_id, string $uuid = null): array;

    public function addExtraFieldByGroup(array $data, string $user_id, string $uuid = null): void;

    public function updateUserExtraFieldByGroupAndProfileFieldUuid(array $uuid_data, string $user_id): void;

    public function updateUserExtraFieldByGroup(array $data, string $user_id, string $uuid = null): void;

    public function updateUserExtraFieldByGroupTest(array $data, string $user_id, string $uuid = null): void;

    // public function consents(): HasMany;

    // public function getMandatoryConsentsFormDataRules(): array;
}
