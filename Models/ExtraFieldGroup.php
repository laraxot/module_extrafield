<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\HasCategory;
use Spatie\Translatable\HasTranslations;

/**
 * Modules\ExtraField\Models\ExtraFieldGroup.
 *
 * @property int                                                                                            $id
 * @property mixed|null                                                                                     $name
 * @property \Illuminate\Support\Carbon|null                                                                $created_at
 * @property \Illuminate\Support\Carbon|null                                                                $updated_at
 * @property string|null                                                                                    $created_by
 * @property string|null                                                                                    $updated_by
 * @property int|null                                                                                       $cardinality
 * @property string|null                                                                                    $description
 * @property \Kalnoy\Nestedset\Collection<int, \Modules\Blog\Models\Category>                               $categories
 * @property int|null                                                                                       $categories_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroupMorph> $extraFieldGroupMorphs
 * @property int|null                                                                                       $extra_field_group_morphs_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $extraFields
 * @property int|null                                                                                       $extra_fields_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $fields
 * @property int|null                                                                                       $fields_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroupMorph> $noUserExtraFieldGroupMorphs
 * @property int|null                                                                                       $no_user_extra_field_group_morphs_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $noUserFields
 * @property int|null                                                                                       $no_user_fields_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $userFields
 * @property int|null                                                                                       $user_fields_count
 * @property bool                                                                                           $mandatory
 * @property bool                                                                                           $can_verified
 *
 * @method static \Modules\ExtraField\Database\Factories\ExtraFieldGroupFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereCardinality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withAllCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withAnyCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withPivotFields($model_type, $model_id)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withoutAnyCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withoutCategories($categories)
 *
 * @property \Kalnoy\Nestedset\Collection<int, \Modules\Blog\Models\Category>                               $categories
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroupMorph> $extraFieldGroupMorphs
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $extraFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $fields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraFieldGroupMorph> $noUserExtraFieldGroupMorphs
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $noUserFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField>           $userFields
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup whereCanVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup whereMandatory($value)
 *
 * @mixin \Eloquent
 */
class ExtraFieldGroup extends BaseModel
{
    use HasCategory;
    // use HasTranslations;
    protected $fillable = [
        'id',
        'name',
        'description',
        'cardinality',
        'can_verified',
        'mandatory',
        'verified_by',
    ];

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

    public function extraFieldGroupMorphs(): HasMany
    {
        return $this->hasMany(ExtraFieldGroupMorph::class, 'extra_field_group_id');
    }

    public function noUserExtraFieldGroupMorphs(): HasMany
    {
        return $this->extraFieldGroupMorphs()
        ->where('user_id', null);
    }

    public function userExtraFieldGroupMorphs(string $user_id): HasMany
    {
        return $this->extraFieldGroupMorphs()
        ->where('user_id', $user_id);
    }

     /**
      * @param \Illuminate\Database\Eloquent\Builder $query
      * @param string                                $model_type
      * @param string                                $model_id
      *
      * @return \Illuminate\Database\Eloquent\Builder
      */
     public function scopeWithPivotFields($query, $model_type, $model_id)
     {
         return $query->with(['noUserExtraFieldGroupMorphs' => function ($q) use ($model_type) {
             $q->where('model_type', $model_type)->where('model_id', null);
         }]);
     }
}
