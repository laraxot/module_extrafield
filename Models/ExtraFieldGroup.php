<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Support\Facades\Auth;
use Spatie\LaravelData\DataCollection;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Models\Traits\HasCategory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Modules\LU\Services\ProfileService;

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

    /**
     * @return DataCollection <FieldData>
     */
    public function fieldDataCollection(string $user_id, Model $model)
    {
        $profile = ProfileService::make()->setUserId($user_id)->getProfile();

        $fields = $this->noUserFields
            ->map(function ($item) use ($profile, $model, $user_id) {
                $service_value = $model
                    ->userExtraFields((string) $user_id)
                    ->wherePivot('extra_field_id', $item->id)
                    ->first();

                $profile_value = $profile->userExtraFields((string) $user_id)
                    ->wherePivot('extra_field_id', $item->id)
                    ->first();

                // dddx([$service_value, $profile_value]);
                return $service_value ?? $profile_value ?? $item;
            });
        return $fields;
    }
}
