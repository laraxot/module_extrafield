<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">TWO</x-slot>

    <x-flash-message />
    pjfdposfp mpfoadsmpofds

    <x-slot name="buttons">
        <x-button wire:click="save()" class="btn btn-primary rounded-5">
            Modifica
        </x-button>

        <x-button type="cancel" wire:click="$emit('modal.close')">
            Cancel
        </x-button>
    </x-slot>
</x-modal.skin>
