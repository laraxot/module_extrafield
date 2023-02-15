<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;

class ExtraFieldGroup extends BaseModel {
    protected $fillable = ['id', 'name', 'cardinality'];

    // non so se sia giusta con sta polimorfica. dovrebbe essere ExtraFieldMorph secondo me
    public function fields(): MorphToMany {
        // return $this->hasMany(ExtraField::class, 'group_id');

        $pivot_class = ExtraFieldGroupMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
        ->using($pivot_class)
        ->withPivot($pivot_fields)
        ->withTimestamps();
    }

    public function fieldsNew(): MorphToMany {
        // return $this->hasMany(ExtraField::class, 'group_id');

        $pivot_class = ExtraFieldMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
        ->using($pivot_class)
        ->withPivot($pivot_fields)
        ->withTimestamps();
    }

    // fatta da davide. è giusta quella sopra con quella pivot_class? non dovrebbe essere ExtraFieldMorph la Pivot?
    public function userFields(): MorphToMany {
        $pivot_class = ExtraFieldMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
        ->using($pivot_class)
        ->withPivot($pivot_fields)
        ->wherePivot('user_id', Auth::id())
        ->withTimestamps();
    }
}
