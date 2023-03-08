<?php

declare(strict_types=1);

namespace Modules\ExtraField\Datas;

use Livewire\Wireable;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

class FieldData extends Data implements Wireable {
    use WireableData;

    public string $name;
    public ?string $value;
}
