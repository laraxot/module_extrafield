<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Modifica Campo</x-slot>

    @foreach ($fields as $field)
        <x-input.field :field="$field" />
    @endforeach

    <x-flash-message />

    <x-slot name="buttons">


        <button type="submit" class="btn btn-primary rounded-5">
            Save Changes
        </button>

        <button type="button" class="btn btn-danger rounded-5" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-modal.skin>
