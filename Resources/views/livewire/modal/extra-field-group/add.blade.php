<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">
        {{ __($view) }}
    </x-slot>

    <livewire:wizard.extra-field-group.add :cat_id="$cat_id" :model_type="$model_type" :model_id="$model_id" />

    <x-slot name="buttons">
        <x-button type="cancel" wire:click="$emit('modal.close')">
            Cancel
        </x-button>
    </x-slot>
</x-modal.skin>
