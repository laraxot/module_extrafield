<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

class ExtraFieldGroup extends BaseModel {
    protected $fillable = ['id', 'name', 'cardinality'];

    public function fields() {
        // return $this->hasMany(ExtraField::class, 'group_id');

        $pivot_class = ExtraFieldGroupMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraField::class, 'model',$pivot_table)
        ->using($pivot_class)
        ->withPivot($pivot_fields)
        ->withTimestamps();
    }
}
