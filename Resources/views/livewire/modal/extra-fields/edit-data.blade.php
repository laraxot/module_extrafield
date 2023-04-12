<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Modifica Campo</x-slot>

    @foreach ($fields as $field)
        <x-input.field :field="$field" />
    @endforeach

    <x-flash-message />

    <x-slot name="buttons">


        {{-- <button type="button" wire:click="save()" class="btn btn-primary rounded-5">
            Save Changes
        </button> --}}
        <x-button wire:click="save()" class="btn btn-primary rounded-5">
            Modifica
        </x-button>

        {{-- <button type="button" class="btn btn-danger rounded-5" wire:click="$emit('modal.close')">
            Cancel
        </button> --}}
        <x-button class="btn btn-danger rounded-5" wire:click="$emit('modal.close')">
            Cancel
        </x-button>
    </x-slot>
</x-modal.skin>
