<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Che nome vuoi mettere al gruppo?</x-slot>

    <input type="text" class="form-control" name="name" wire:model.lazy="form_data.name">

    <x-slot name="buttons">

        <button type="submit" class="btn btn-primary">
            Save Changes
        </button>


        <button type="button" class="btn btn-danger" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-modal.skin>
