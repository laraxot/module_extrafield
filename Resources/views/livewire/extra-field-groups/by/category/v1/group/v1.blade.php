<x-flash-message />
<x-std tpl="accordion.container">
    <x-slot name="id">{{ $group->pivot->uuid }}</x-slot>
    <x-slot name="header">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h5>
                        @if ($group->pivot->note !== null && $group->pivot->note !== '')
                            {{ Str::ucfirst($group->pivot->note) }}
                        @else
                            {{ Str::ucfirst($group->name) }}
                        @endif
                    </h5>
                </div>
                <div class="col-2">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" wire:click="toggleFavourite('{{ $group->pivot->uuid }}')">
                                @if ($group->pivot->verified_at != null)
                                    <i class="bi bi-shield mr-4"></i>
                                @endif

                                @if ($group->pivot->favourite)
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
                ->extraFieldsByUserId(auth()->id())
                ->wherePivot('uuid', $group->pivot->uuid)
                ->get();
        @endphp
        @foreach ($fields ?? [] as $field)
            <div class="row">
                <div class="col-md-9 mb-2">
                    <p>{{ $field->name }}: {{ $field->pivot->value }}
                    </p>
                </div>

                <div class="col-md-3  mb-2 text-right">
                </div>
            </div>
        @endforeach

        <x-button wire:click="edit('{{ $group->pivot->uuid }}','{{ $group->can_verified }}','{{ $group->id }}')">Edit
        </x-button>
        <x-button wire:click="preDelete('{{ $group->pivot->uuid }}')" class="btn btn-danger">Delete</x-button>
    </x-slot>
</x-std>
