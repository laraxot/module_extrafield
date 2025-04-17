<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">
        {{-- __('pfed::modal.title.add_field') --}}
        Aggiungi Campo
    </x-slot>

    <livewire:modal.extra-fields.data-steps :cat_id="$cat_id" :model_type="$model_type" :model_id="$model_id" />

    <x-slot name="buttons">
        {{--  
        <button type="submit">
            Save Changes
        </button>
        --}}
        <x-button type="cancel" wire:click="$emit('modal.close')" {{--  class="btn btn-danger rounded-5" --}}>
            Cancel
        </x-button>
    </x-slot>
</x-modal.skin>
