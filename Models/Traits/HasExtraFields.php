<?php
/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Modules\ExtraField\Models\ExtraField;
use Modules\ExtraField\Models\ExtraFieldGroup;
use Modules\ExtraField\Models\ExtraFieldMorph;

trait HasExtraFields {
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function extraFields() {
        $pivot_class = ExtraFieldMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        // dddx($pivot_fields);

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            // ->withTimestamps()
        ;
    }

    public function extraFieldGroups() {
        // return $this->hasManyDeep(ExtraFieldGroup::class, [ExtraField::class, PermUser::class]);

        return $this->hasManyDeepFromRelations($this->extraFields(), (new Extrafield())->group());
    }
}
