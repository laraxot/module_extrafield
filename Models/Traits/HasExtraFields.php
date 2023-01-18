<?php
/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\ExtraField\Models\Traits;

use Modules\ExtraField\Models\ExtraField;

trait HasExtraFields {
    public function extraFields() {
        return $this->morphToMany(ExtraField::class, 'model', 'extra_field_morph');
    }
}
