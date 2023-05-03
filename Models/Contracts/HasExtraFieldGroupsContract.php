<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models\Contracts;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\ExtraField\Models\ExtraField;
use Modules\PFed\Models\Consent;
use Modules\Xot\Contracts\ModelContract;

/**
 * @property string                                                                                    $name
 * @property EloquentCollection<int, ExtraField>                                                       $extraFields
 * @property EloquentCollection<int, Consent>                                                          $consents
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroup> $extraFieldGroups
 */
interface HasExtraFieldGroupsContract extends ModelContract
{
    public function userExtraFieldGroups(string $user_id): MorphToMany;

    public function noUserExtraFieldGroups(): MorphToMany;

    public function extraFieldGroups(): MorphToMany;

    public function extraFieldsByUserId(?string $user_id = null): MorphToMany;

    public function extraFields(): MorphToMany;
}
