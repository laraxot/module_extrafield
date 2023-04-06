<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Your Title</x-slot>
 
    @foreach($fields as $field)
        <x-input.field :field="$field" />
    @endforeach
    
    <x-slot name="buttons">
          
        <button type="submit" class="btn btn-primary">
            Save Changes
        </button>
        
        <button type="button" class="btn btn-danger" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-modal.skin>