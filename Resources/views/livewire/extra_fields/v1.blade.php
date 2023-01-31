<div>
    <div class="row">
        <div class="col-12">
            <x-card>
                <x-slot name="title">Extra Fields</x-slot>
                <x-slot name="txt">
                    @foreach ($groups as $group)
                        <h3>{{ $group['label'] }}</h3>
                        @foreach ($group['items_grouped'] as $uuid => $groups1)
                            {{-- <h4>{{$uuid}}</h4> --}}
                            @foreach ($groups1 as $k1 => $group2)
                                <br />{{ $group2->name }}: {{ $group2->pivot->value }}
                            @endforeach
                            <button type="button" class="btn btn-primary"
                                wire:click="$emit('modal.open', 'modal.extra-fields.edit-data',{'uuid':'{{ $uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">Edit</button>
                            <button type="button" class="btn btn-primary"
                                wire:click="$emit('modal.open', 'modal.extra-fields.delete-data',{'uuid':'{{ $uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">Delete</button>
                            <hr />
                        @endforeach
                    @endforeach
                </x-slot>
                <x-slot name="footer">
                    <button class="btn btn-primary"
                        onclick="Livewire.emit('modal.open', 'modal.extra-fields.add-data', {'model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
                        Add
                    </button>
                </x-slot>
            </x-card>
        </div>
    </div>
</div>
