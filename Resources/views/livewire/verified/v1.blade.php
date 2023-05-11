@props([])

<div>

    <input wire:model="form_data.{{ $field_name }}" type="text" class="form-control" wire:change="updateFormData">

    <x-flash-message />

</div>
