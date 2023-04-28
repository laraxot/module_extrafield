<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Modifica Campo</x-slot>

    @foreach ($fields as $field)
        @php
            dddx($field);
            $field_data = $this->toFieldData($field);
            dddx($field_data);
        @endphp
        <x-input.field :field="$field_data" />
    @endforeach

    <x-flash-message />

    <x-slot name="buttons">

        <x-button wire:click="save()" class="btn btn-primary rounded-5">
            Modifica
        </x-button>

        <x-button class="btn btn-danger rounded-5" wire:click="$emit('modal.close')">
            Cancel
        </x-button>
    </x-slot>
</x-modal.skin>
