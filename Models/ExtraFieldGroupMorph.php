<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * Modules\ExtraField\Models\ExtraFieldGroupMorph.
 *
 * @property int                                             $id
 * @property string|null                                     $model_type
 * @property int|null                                        $model_id
 * @property int|null                                        $user_id
 * @property string|null                                     $created_by
 * @property string|null                                     $updated_by
 * @property \Illuminate\Support\Carbon|null                 $created_at
 * @property \Illuminate\Support\Carbon|null                 $updated_at
 * @property int|null                                        $extra_field_group_id
 * @property array|null                                      $value
 * @property string|null                                     $value_class
 * @property string|null                                     $uuid
 * @property int                                             $favourite
 * @property string|null                                     $note
 * @property int|null                                        $cardinality
 * @property int|null                                        $is_verified
 * @property string|null                                     $token
 * @property \Modules\ExtraField\Models\ExtraFieldGroup|null $extraFieldGroup
 * @property bool                                            $can_verified
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereCardinality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereExtraFieldGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereFavourite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereIsVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereValueClass($value)
 *
 * @property string|null $verified_at
 * @property string|null $verified_by
 * @property int         $mandatory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereCanVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereMandatory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraFieldGroupMorph whereVerifiedBy($value)
 *
 * @mixin \Eloquent
 */
class ExtraFieldGroupMorph extends BaseMorphPivot
{
    use SoftDeletes;

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
        'extra_field_group_id',
        'favourite',
        'note',
        'is_verified',
        'token',
        'token_sent_at',
        'verified_at',
        'verified_by',
        'cardinality',
        'can_verified',
        'mandatory',
        'cardinality',
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

    /*--- DEPRECATED
     * Undocumented function.
     *
     * @return mixed

    public function userValue(string $user_id)
    {
        $res = ExtraFieldMorph::firstOrNew([
            'user_id' => $user_id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
            //'extra_field_id' => $this->extra_field_id,
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
    */

    /* --- DEPRECATED
     * Undocumented function.
     *
     * @param mixed $value

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
    */

    public function extraFieldGroup(): BelongsTo
    {
        return $this->belongsTo(ExtraFieldGroup::class);
    }

    public function fieldMorph(): BelongsTo
    {
        return $this->belongsTo(ExtraFieldMorph::class, 'uuid', 'uuid');
    }
}
