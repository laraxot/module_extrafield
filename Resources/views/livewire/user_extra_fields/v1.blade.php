<div>
    <div class="row">
        <div class="col-12">
            <x-card>
                <x-slot name="title">User Extra Fields</x-slot>

                <x-slot name="txt">
                    @foreach ($groups as $group)
                        <h3>{{ $group['label'] }}</h3>

                        @foreach ($group['items_grouped'] as $uuid => $groups1)
                            @foreach ($groups1 as $k1 => $item)
                                <br />{{ $item->name }}: {{-- $this->getFromUserTable($item) --}}
                                {{ $item->pivot->userValue($this->user_id) }}
                            @endforeach
                            <button type="button" class="btn btn-primary"
                                wire:click="$emit('modal.open', 'modal.extra-fields.user.edit-data',{'uuid':'{{ $uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
                                Edit</button>
                            <hr />
                        @endforeach
                    @endforeach


                </x-slot>
            </x-card>
        </div>
    </div>
</div>
