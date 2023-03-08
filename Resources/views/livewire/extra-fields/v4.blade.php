<div>
    <div class="row">
        <div class="col-4">

            <div class="card position-sticky top-24">
                <div class="card-body pb-0">
                    <div>
                        <h6 class="mb-4">{{ $profile->handle() }}</h6>
                        <div class="col-auto text-center">
                            <a href="#"
                                class="avatar w-40 h-40 border border-body border-4 rounded-circle shadow"><img
                                    alt="Profile Picture" src="{{ $profile->avatar() }}" class="rounded-circle"></a>
                        </div>

                        <hr class="mt-4 mb-0">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <h6 class="text-sm text-muted font-semibold">Categories</h6>

                                </div>
                                <div class="vstack gap-3 mt-3">

                                    @foreach ($categories as $category)
                                        <div class="d-flex align-items-center">
                                            <div class="flex-none"><img alt="..."
                                                    class="avatar w-5 h-5 rounded-circle" src="/img/people/img-2.jpg">
                                            </div>
                                            <div class="flex-fill ms-3"><a href="#"
                                                    wire:click="showCat({{ $category->id }})"
                                                    class="text-sm text-heading font-semibold mb-0">{{ $category->name }}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>


        <div class="col-8">
            @if (!empty($category_name))
                <x-card>
                    <x-slot name="title">{{ $category_name }}</x-slot>

                    <x-slot name="txt">

                        @foreach ($groups as $group)
                            <h5>{{ Str::ucfirst($group->name) }} {{-- $group->pivot->uuid --}}</h5>
                            {{-- {{ dddx($model->userFields) }} --}}
                            {{-- {{ dddx(rowsToSql($model->userExtraFields())) }} --}}
                            @php
                                $fields = $model
                                    ->userExtraFields()
                                    // ->whereHas('groups', function ($query) use ($group) {
                                    //     $query->where('extra_field_groups.id', $group->id);
                                    // })
                                    ->wherePivot('uuid', $group->pivot->uuid)
                                    ->get();
                                
                                // dddx([
                                //     'fields' => $fields,
                                //     'group' => $group,
                                // ]);
                                
                            @endphp
                            @foreach ($fields ?? [] as $field)
                                {{-- {{ dddx($field) }} --}}
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

                            {{-- uuid:{{ $field->pivot->uuid }}<br>
                            model_type: {{ $model_type }}<br>
                            model_id: {{ $model_id }} --}}
                            <x-button
                                wire:click="$emit('modal.open', 'modal.extra-fields.edit-data',{'uuid':'{{ $group->pivot->uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
                                Edit
                            </x-button>

                            {{-- <x-button
                                wire:click="$emit('modal.open', 'modal.extra-fields.delete-data',{'uuid':'{{ $group->pivot->uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
                                Delete
                            </x-button> --}}
                            <x-button wire:click="delete('{{ $group->pivot->uuid }}')">Delete</x-button>
                        @endforeach

                        <div class="row">
                            <div class="col-md-12 mt-3 mb-2">
                                <button
                                    class="btn btn-sm bg-soft-success bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover"
                                    onclick="Livewire.emit('modal.open', 'modal.extra-fields.add-data', {'cat_id': {{ $cat_id }},'model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
                                    Add Fields
                                </button>
                            </div>
                        </div>
                    </x-slot>
                </x-card>
            @endif
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p-0">
            @if (!$profile->hasRole('light'))
                <x-card tpl="subscription.v1">
                    <x-slot name="title">Light Plan</x-slot>
                    <x-slot name="subtitle">The perfect way to get started</x-slot>
                    <x-slot name="currency">€</x-slot>
                    <x-slot name="amount">6,00</x-slot>
                    <x-slot name="period">month</x-slot>
                    <x-slot name="payment_button">
                        <x-nexi-payment type="simple" contract="NC_LIGHT_" amount="6.00" currency="EUR"
                            text="ACQUISTA ABBONAMENTO" />
                    </x-slot>
                </x-card>
            @endif

            @if (!$profile->hasRole('full'))
                <x-card tpl="subscription.v1">
                    <x-slot name="title">Full Plan</x-slot>
                    <x-slot name="subtitle">Your full consents management</x-slot>
                    <x-slot name="currency">€</x-slot>
                    <x-slot name="amount">24,00</x-slot>
                    <x-slot name="period">year</x-slot>
                    <x-slot name="payment_button">
                        <x-nexi-payment type="simple" contract="NC_FULL_" amount="24.00" currency="EUR"
                            text="ACQUISTA ABBONAMENTO" />
                    </x-slot>
                </x-card>
            @endif
        </div>
    </div>
</div>
