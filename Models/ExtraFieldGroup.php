<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\HasCategory;

class ExtraFieldGroup extends BaseModel
{
    use HasCategory;
    protected $fillable = ['id', 'name', 'cardinality'];

    protected $with = [
        'fields',
    ];

    public function fields(): MorphToMany
    {
        $pivot_class = ExtraFieldMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraField::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            ->withTimestamps();
    }

    public function extraFields(): MorphToMany
    {
        return $this->fields();
    }

    public function noUserFields(): MorphToMany
    {
        return $this->fields()->wherePivot('user_id', null);
    }

    public function userFields(): MorphToMany
    {
        return $this->fields()->wherePivot('user_id', Auth::id());
    }
}
