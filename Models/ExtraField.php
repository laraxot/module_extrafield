<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\Blog\Models\Traits\HasCategory;
use Modules\UI\Datas\FieldData;

/**
 * Modules\ExtraField\Models\ExtraField.
 *
 * @property int                                                          $id
 * @property string                                                       $name
 * @property \Illuminate\Support\Carbon|null                              $created_at
 * @property \Illuminate\Support\Carbon|null                              $updated_at
 * @property string                                                       $type
 * @property string|null                                                  $rules
 * @property string|null                                                  $created_by
 * @property string|null                                                  $updated_by
 * @property \Kalnoy\Nestedset\Collection|\Modules\Blog\Models\Category[] $categories
 * @property int|null                                                     $categories_count
 *
 * @method static \Modules\Blog\Database\Factories\ExtraFieldFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withAllCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withAnyCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withoutAnyCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withoutCategories($categories)
 *
 * @property array|null                                                                                $options
 * @property string|null                                                                               $attributes
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroup> $extraFieldGroups
 * @property int|null                                                                                  $extra_field_groups_count
 * @property \Modules\ExtraField\Models\ExtraFieldMorph|null                                           $extraFieldMorph
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroup> $groups
 * @property int|null                                                                                  $groups_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField whereAttributes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField whereOptions($value)
 *
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroup> $extraFieldGroups
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroup> $groups
 *
 * @mixin \Eloquent
 */
class ExtraField extends BaseModel
{
    use HasCategory;

    protected $fillable = [
        'id', 'name', 'type',
        'rules', 'options', 'attributes',
        // 'collection_name',
        // 'group_id',
    ];

    protected $casts = [
        'options' => 'array',
        'rules' => 'array',
    ];

    // public function group(): BelongsTo {
    //     return $this->belongsTo(ExtraFieldGroup::class);
    // }

    public function extraFieldMorph(): HasOne
    {
        return $this->hasOne(ExtraFieldMorph::class);
    }

    public function extraFieldGroups(): MorphToMany
    {
        $pivot_class = ExtraFieldGroupMorph::class;
        $pivot = app($pivot_class);
        $pivot_table = $pivot->getTable();
        $pivot_fields = $pivot->getFillable();

        return $this->morphToMany(ExtraFieldGroup::class, 'model', $pivot_table)
            ->using($pivot_class)
            ->withPivot($pivot_fields)
            ->withTimestamps();
    }

    // un campo corrisponde solo ad un gruppo, come da specifiche
    public function groups(): MorphToMany
    {
        // return $this->hasMany(ExtraField::class, 'group_id');
        return $this->extraFieldGroups();
    }

    public function toData(): FieldData
    {
        return FieldData::from($this);
    }

    /**
     * Undocumented function.
     *
     * @return mixed
     */
    public function userValue(string $user_id)
    {
        dddx($this->pivot);
    }
}
