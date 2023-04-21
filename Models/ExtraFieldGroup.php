<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\HasCategory;
use Modules\LU\Services\ProfileService;
use Modules\UI\Datas\FieldData;
use Spatie\LaravelData\DataCollection;
use Spatie\Translatable\HasTranslations;

/**
 * Undocumented class.
 *
 * @property string                                                                               $name
 * @property int                                                                                  $id
 * @property \Illuminate\Support\Carbon|null                                                      $created_at
 * @property \Illuminate\Support\Carbon|null                                                      $updated_at
 * @property string|null                                                                          $created_by
 * @property string|null                                                                          $updated_by
 * @property int|null                                                                             $cardinality
 * @property string|null                                                                          $description
 * @property \Kalnoy\Nestedset\Collection<int, \Modules\Blog\Models\Category>                     $categories
 * @property int|null                                                                             $categories_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $extraFields
 * @property int|null                                                                             $extra_fields_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $fields
 * @property int|null                                                                             $fields_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $noUserFields
 * @property int|null                                                                             $no_user_fields_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $userFields
 * @property int|null                                                                             $user_fields_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withoutAnyCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroup         withoutCategories($categories)
 *
 * @property \Kalnoy\Nestedset\Collection<int, \Modules\Blog\Models\Category>                     $categories
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $extraFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $fields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $noUserFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $userFields
 * @property \Kalnoy\Nestedset\Collection<int, \Modules\Blog\Models\Category>                     $categories
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $extraFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $fields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $noUserFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $userFields
 * @property \Kalnoy\Nestedset\Collection<int, \Modules\Blog\Models\Category>                     $categories
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $extraFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $fields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $noUserFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $userFields
 * @property \Kalnoy\Nestedset\Collection<int, \Modules\Blog\Models\Category>                     $categories
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $extraFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $fields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $noUserFields
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\ExtraField\Models\ExtraField> $userFields
 *
 * @mixin \Eloquent
 */
class ExtraFieldGroup extends BaseModel
{
    use HasCategory;
    // use HasTranslations;
    protected $fillable = ['id', 'name', 'cardinality', 'description'];

    // /**
    //  * The attributes that are translatable.
    //  *
    //  * @var array
    //  */
    // public $translatable = [
    //     'name',
    //     'description',
    // ];

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

    /**
     * @return DataCollection <FieldData>
     */
    public function fieldDataCollection(string $user_id, Model $model)
    {
        $profile = ProfileService::make()->setUserId($user_id)->getProfile();

        $fields = $this->noUserFields
            ->map(
                function ($item) use ($profile, $model, $user_id) {
                    if (! method_exists($model, 'userExtraFields')) {
                        throw new \Exception('['.__LINE__.']['.__FILE__.']');
                    }
                    $service_value = $model
                        ->userExtraFields((string) $user_id)
                        ->wherePivot('extra_field_id', $item->getKey())
                        ->first();
                    if (! method_exists($profile, 'userExtraFields')) {
                        throw new \Exception('['.__LINE__.']['.__FILE__.']');
                    }
                    $profile_value = $profile->userExtraFields((string) $user_id)
                        ->wherePivot('extra_field_id', $item->getKey())
                        ->first();

                    // dddx([$service_value, $profile_value]);
                    return $service_value ?? $profile_value ?? $item;
                });

        return $fields;
    }
}
