<?php

declare(strict_types=1);

namespace Modules\ExtraField\Datas;

use Livewire\Wireable;
use Modules\UI\Datas\FieldData;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GroupData extends Data implements Wireable
{
    use WireableData;

    public string $name;
    /**
     * @var DataCollection<FieldData>
     */
    public DataCollection $fields;
}
