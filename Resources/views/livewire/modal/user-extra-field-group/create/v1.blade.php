<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Create User Extra Field Group</x-slot>

    @foreach ($fields as $field)
        <x-input.field :field="$field" />
    @endforeach

    <x-flash-message />
    <x-slot name="buttons">
        <x-button wire:click="save()">Save</x-button>
        <x-button type="cancel" wire:click="$emit('modal.close')">Cancel</x-button>
    </x-slot>
</x-modal.skin>
