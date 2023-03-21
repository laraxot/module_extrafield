{{-- <x-std tpl="accordion.container"></x-std> --}}


<h5>
    <a href="#" wire:click="setFavouriteGroup('{{ $group->id }}','{{ $group->pivot->uuid }}')">
        @if ($group->is_favourite == true)
            <i class="bi bi-star-fill"></i>
        @else
            <i class="bi bi-star"></i>
        @endif
    </a>
    {{ Str::ucfirst($group->name) }} {{-- $group->pivot->uuid --}}
</h5>
@php
    $fields = $model
        ->userExtraFields(auth()->id())
        ->wherePivot('uuid', $group->pivot->uuid)
        ->get();
    
@endphp
@foreach ($fields ?? [] as $field)
    <div class="row">
        <div class="col-md-9 mb-2">
            <p>{{ $field->name }} : {{ $field->pivot->value }}
            </p>
        </div>
        <hr />
        <div class="col-md-3  mb-2 text-right">
        </div>
    </div>
@endforeach
<x-button
    wire:click="$emit('modal.open', 'modal.extra-fields.edit-data',{'uuid':'{{ $group->pivot->uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
    Edit
</x-button>
<x-button wire:click="delete('{{ $group->pivot->uuid }}')">Delete</x-button>
