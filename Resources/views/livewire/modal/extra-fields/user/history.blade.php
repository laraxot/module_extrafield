<x-wire-elements-pro::bootstrap.modal on-submit="save" :content-padding="false">
    <x-slot name="title">Data History</x-slot>

    @foreach ($history as $item)
        Extra Field Id: {{ $item['extra_field_id'] }}
        {{-- Updated at: {{ $item['updated_at'] }}<br> --}}
        Value: {{ $item['value'] }}<br>
        <br>
    @endforeach

    <x-slot name="buttons">
        <button type="button" class="btn btn-danger" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-wire-elements-pro::bootstrap.modal>
