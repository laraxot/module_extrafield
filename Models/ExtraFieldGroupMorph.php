<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

/**
 * Modules\ExtraField\Models\ExtraFieldMorph.
 *
 * @property int                             $id
 * @property string|null                     $model_type
 * @property int|null                        $model_id
 * @property int|null                        $user_id
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $extra_field_id
 * @property string|null                     $value
 * @property string|null                     $value_class
 * @property string|null                     $uuid
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereExtraFieldId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldMorph whereValueClass($value)
 *
 * @property int|null                                        $extra_field_group_id
 * @property int                                             $favourite
 * @property string|null                                     $note
 * @property \Modules\ExtraField\Models\ExtraFieldGroup|null $extraFieldGroup
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereExtraFieldGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereFavourite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereUuid($value)
 *
 * @mixin \Eloquent
 */
class ExtraFieldGroupMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'model_id',
        'model_type',
        'user_id',
        'value',
        'value_class',
        'uuid',
        'extra_field_id',
        'extra_field_group_id',
        'favourite',
        'note',
    ];

    protected $casts = [
        'value' => 'array',
    ];

    /*public function extraFieldMorphUserValues(): HasMany {
        return $this->hasMany(ExtraFieldMorphUserValue::class);
    }

    public function extraFieldMorphUserValue(): HasOne {
        return $this->hasOne(ExtraFieldMorphUserValue::class)
            ->where('user_id', Auth::id())
        ;
    }*/

    /**
     * Undocumented function.
     *
     * @return mixed
     */
    public function userValue(string $user_id)
    {
        $res = ExtraFieldMorph::firstOrNew([
            'user_id' => $user_id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
            'extra_field_id' => $this->extra_field_id,
            'uuid' => $this->uuid,
        ]);

        $value = $res->value;
        if (null == $value) {
            return $value;
        }
        if (isJson($value)) {
            $value = json_decode($value);
        }

        return $value;
    }

    /**
     * Undocumented function.
     *
     * @param mixed $value
     */
    public function updateUserValue(string $user_id, $value): ExtraFieldMorph
    {
        $row = ExtraFieldMorph::firstOrCreate([
            'user_id' => $user_id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
            'extra_field_id' => $this->extra_field_id,
            'uuid' => $this->uuid,
        ]);

        $res = tap($row)->update(['value' => $value]);

        return $res;
    }

    public function extraFieldGroup(): BelongsTo
    {
        return $this->belongsTo(ExtraFieldGroup::class);
    }
}
