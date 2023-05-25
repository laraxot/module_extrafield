<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Modifica Campo</x-slot>

    @foreach ($fields as $field)
        <x-input.field :field="$this->toFieldData($field)" />

        @livewire('extra-field-groups.morph.verified', ['model_type' => $model_type, 'model_id' => $model_id, 'can_verified' => $can_verified, 'extra_field_group_id' => $extra_field_group_id], key('item-' . $loop->iteration))
    @endforeach

    <x-flash-message />

    <x-slot name="buttons">

        @if ($can_verified != true)
            <x-button wire:click="save()" class="btn btn-primary rounded-5">
                Modifica
            </x-button>
        @else
            <x-button wire:click="refresher()" class="btn btn-primary rounded-5">
                Modifica
            </x-button>
        @endif
        <x-button class="btn btn-danger rounded-5" wire:click="$emit('modal.close')">
            Cancel
        </x-button>

    </x-slot>
</x-modal.skin>
