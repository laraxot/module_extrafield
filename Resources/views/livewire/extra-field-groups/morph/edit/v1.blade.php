<div class="row">
    @foreach ($this->rows as $row)
        <hr />
        <h3> {{ $row->extraFieldGroup->name }}</h3>
        @foreach ($this->getFieldsByRow($row) as $field)
            <x-input.field :field="$field" />
        @endforeach
    @endforeach
    <x-flash-message />
    <x-button wire:click="save()">Save</x-button>
</div>
