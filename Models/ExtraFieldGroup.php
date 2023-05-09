<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\HasCategory;
use Modules\LU\Services\ProfileService;
use Modules\UI\Datas\FieldData;
use Spatie\LaravelData\DataCollection;
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
 * @mixin \Eloquent
 */
class ExtraFieldGroup extends BaseModel
{
    use HasCategory;
    // use HasTranslations;
    protected $fillable = ['id', 'name', 'cardinality', 'description'];

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

    /* -- DEPRECATED
     * @return DataCollection <FieldData>

    public function fieldDataCollection(string $user_id, Model $model)
    {
        $profile = ProfileService::make()->setUserId($user_id)->getProfile();

        $fields = $this->noUserFields
            ->map(
                function ($item) use ($profile, $model, $user_id) {
                    $service_value = $model
                        ->extraFieldsByUserId((string) $user_id)
                        ->wherePivot('extra_field_id', $item->getKey())
                        ->first();

                    $profile_value = $profile->extraFieldsByUserId((string) $user_id)
                        ->wherePivot('extra_field_id', $item->getKey())
                        ->first();

                    return $service_value ?? $profile_value ?? $item;
                });

        return $fields;
    }
    */

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

     /*
      * @return mixed
      */
     // public function userValue(string $user_id)
    // {
         // dddx(['a' => $this, 'pivot' => $this->pivot]);
         // dddx(['fields' => $this->fields->first()->userValue($user_id)]);
     // }
}
