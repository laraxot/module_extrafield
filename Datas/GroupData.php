<?php

declare(strict_types=1);

namespace Modules\ExtraField\Datas;

use Livewire\Wireable;
use Modules\ExtraField\Models\ExtraFieldGroupMorph;
use Modules\UI\Datas\FieldData;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GroupData extends Data implements Wireable
{
    use WireableData;

    public string $id;
    public string $name;
    public ?string $cardinality;
    public ?string $description = null;
    /**
     * @var DataCollection<FieldData>
     */
    public DataCollection $fields;

    public ExtraFieldGroupMorph $pivot;
}
