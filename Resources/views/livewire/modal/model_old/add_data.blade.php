<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Your Title</x-slot>

    <livewire:modal.extra-fields.data-steps :cat_id="$cat_id" :model_type="$model_type" :model_id="$model_id" />

    <x-slot name="buttons">
        {{--  
        <button type="submit">
            Save Changes
        </button>
        --}}
        <button type="button" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-modal.skin>
