<x-wire-elements-pro::bootstrap.modal on-submit="save" :content-padding="false">
    <x-slot name="title">Data History</x-slot>

    @foreach ($history as $item)
        <h2>{{ $item['extra_field_name'] }}</h2>
        Value: {{ $item['properties']['attributes']['value'] }}<br>
        Updated at: {{ $item['update'] }}<br>
        <br>
    @endforeach

    <x-slot name="buttons">
        <button type="button" class="btn btn-danger" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-wire-elements-pro::bootstrap.modal>
