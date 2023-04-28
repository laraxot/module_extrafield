<?php

/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\LU\Models\User;

trait HasExtraFieldGroups
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function userExtraFieldGroups(string $user_id): MorphToMany
    {
        return $this->extraFieldGroups()->wherePivot('user_id', $user_id);
    }

    public function noUserExtraFieldGroups(): MorphToMany
    {
        // dd($this->extraFieldGroups()->wherePivot('user_id', null)->toSql());
        // non vanno i wherepivot qua. bisogna passare per relazioni già con il wherepivot

        // non si usa '' ma null. Con '' non funziona allo stesso modo e non vedi nessun gruppo
        return $this->extraFieldGroups()->wherePivot('user_id', null);
    }

    public function extraFieldGroups(): MorphToMany
    {
        // return $this->hasManyDeep(ExtraFieldGroup::class, [ExtraField::class, PermUser::class]);

        // return $this->hasManyDeepFromRelations($this->extraFields(), (new Extrafield())->group());

        $pivot_class = ExtraFieldGroupMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        // dddx($pivot_fields);

        return $this->morphToMany(ExtraFieldGroup::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            // ->withTimestamps()
        ;
    }
}
