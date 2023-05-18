<?php

/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\ExtraField\Models\ExtraFieldMorph;
use Modules\LU\Models\User;

trait HasExtraFieldGroups
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function userExtraFieldGroups(?string $user_id = null): MorphToMany
    {
        /*
        if (null == $user_id) {
            $user_id = Auth::id();
        }
        */

        if ('' === $user_id) {
            $user_id = null;
        }

        return $this->extraFieldGroups()->wherePivot('user_id', $user_id);
    }

    public function noUserExtraFieldGroups(): MorphToMany
    {
        // dd($this->extraFieldGroups()->wherePivot('user_id', null)->toSql());
        // non vanno i wherepivot qua. bisogna passare per relazioni già con il wherepivot

        // non si usa '' ma null. Con '' non funziona allo stesso modo e non vedi nessun gruppo
        return $this->extraFieldGroups()->wherePivot('user_id', null);
    }

    /**
     * Undocumented function.
     *
     * @return MorphToMany<ExtraFieldGroup>
     */
    public function extraFieldGroups(): MorphToMany
    {
        $pivot_class = ExtraFieldGroupMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraFieldGroup::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            // ->withTimestamps()
        ;
    }

    /*-- deprecated --
    public function userExtraFields(?string $user_id = null): MorphToMany
    {
        return $this->extraFieldsByUserId($user_id);
    }
    -*/

    public function extraFieldsByUserId(?string $user_id = null): MorphToMany
    {
        if (null == $user_id) {
            $user_id = strval(Auth::id());
        }

        return $this->extraFields()
            ->wherePivot('user_id', $user_id);
    }

    public function extraFields(): MorphToMany
    {
        $pivot_class = ExtraFieldMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields);
    }
}
