<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

/**
 * Modules\ExtraField\Models\ExtraFieldMorphUserValue.
 *
 * @property int                             $id
 * @property int|null                        $user_id
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $extra_field_morph_id
 * @property string|null                     $value
 * @property string|null                     $value_class
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
 * @mixin \Eloquent
 */
class ExtraFieldMorphUserValue extends BaseModel {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'value',
        'value_class',
        'uuid',
    ];
}
