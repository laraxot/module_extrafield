<?php

declare(strict_types=1);

namespace Modules\ExtraField\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

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
 * @mixin \Eloquent
 */
class ExtraFieldMorph extends BaseMorphPivot {
    use LogsActivity;
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
        'favourite',
        'note',
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
    public function userValue(string $user_id) {
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
    public function updateUserValue(string $user_id, $value): self {
        // si creano dei doppioni con update. perchè?
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

    /**
     * Undocumented function.
     *
     * @param mixed $value
     */
    public function createUserValue(string $user_id, $value, ?string $uuid = null): self {
        $row = ExtraFieldMorph::create([
            'user_id' => (string) $user_id,
            'model_type' => $this->model_type,
            'model_id' => (string) $this->model_id,
            'extra_field_id' => (string) $this->extra_field_id,
            'uuid' => $uuid ?? $this->uuid,
            'value' => $value,
        ]);

        return $row;
    }

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()->logOnly($this->getFillable());
    }

    public function extraField(): BelongsTo {
        return $this->belongsTo(ExtraField::class);
    }
}
