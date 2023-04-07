<x-std tpl="accordion.container">
    <x-slot name="id">{{ $group->pivot->uuid }}</x-slot>
    <x-slot name="header">

        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h5>
                        {{ Str::ucfirst($group->name) }}
                        @if ($group->pivot->note !== null && $group->pivot->note !== '')
                            - {{ Str::ucfirst($group->pivot->note) }}
                        @endif
                    </h5>
                </div>
                <div class="col-2">
                    <div class="row">
                        <div class="col-6">
                            <a href="#"
                                wire:click="setFavouriteGroup('{{ $group->id }}','{{ $group->pivot->uuid }}')">
                                @if ($group->is_favourite == true)
                                    <i class="bi bi-suit-heart-fill"></i>
                                @else
                                    <i class="bi bi-suit-heart"></i>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>


    <x-slot name="body">
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

                <div class="col-md-3  mb-2 text-right">
                </div>
            </div>
        @endforeach
        <x-button
            wire:click="$emit('modal.open', 'modal.extra-fields.edit-data',{'uuid':'{{ $group->pivot->uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
            Edit
        </x-button>
        <x-button wire:click="delete('{{ $group->pivot->uuid }}')" class="btn btn-danger">Delete</x-button>
    </x-slot>
</x-std>
