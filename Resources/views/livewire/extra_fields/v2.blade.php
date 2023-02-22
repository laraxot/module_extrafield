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
                        {{-- <div class="d-flex gap-3 justify-content-end mt-4">
                            <button type="button"
                                class="btn btn-link p-0 link-primary text-center font-semibold">Upload
                                Picture</button>
                        </div> --}}
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
            {{-- <a class="btn btn-sm bg-soft-success bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover"
                href="{{ url('admin/pfed/it?_act=upgrades') }}">
                Effettua l'ugrade
            </a> --}}
            {{-- <a class="btn btn-sm bg-soft-success bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover"
                href="{{ url('admin/pfed/it?_act=email_verification') }}">
                Verifica Email
            </a>
            <a class="btn btn-sm bg-soft-success bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover"
                href="{{ url('admin/pfed/it?_act=mobile_verification') }}">
                Verifica Mobile
            </a> --}}


        </div>


        <div class="col-8">
            @if (!empty($category_name))
                <x-card>
                    <x-slot name="title">{{ $category_name }}</x-slot>

                    <x-slot name="txt">
                        @foreach ($groups as $group)
                            @if ($group['label'] == 'no_group')
                                <h5>No Group Name
                                    <button type="button"
                                        class="btn btn-sm bg-primary bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover"
                                        wire:click="$emit('modal.open', 'modal.extra-fields.group.assign-name',{'group_id':'{{ $group['id'] }}'})">Assign
                                        Group Name</button>
                                </h5>
                            @else
                                <h5>{{ Str::ucfirst($group['label']) }}</h5>
                            @endif
                            @foreach ($group['items_grouped'] as $uuid => $groups1)
                                <div class="row">
                                    <div class="col-md-9 mb-2">
                                        @foreach ($groups1 as $k1 => $group2)
                                            {{ $group2->name }} : {{ $group2->pivot->value }}<br>
                                        @endforeach
                                    </div>
                                    <div class="col-md-3  mb-2 text-right">
                                        <button type="button"
                                            class="btn btn-sm bg-primary bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover"
                                            wire:click="$emit('modal.open', 'modal.extra-fields.edit-data',{'uuid':'{{ $uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">Edit</button>
                                        <button type="button"
                                            class="btn btn-sm bg-primary bg-opacity-20 bg-opacity-100-hover text-primary text-white-hover"
                                            wire:click="$emit('modal.open', 'modal.extra-fields.delete-data',{'uuid':'{{ $uuid }}','model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">Delete</button>
                                    </div>
                                    <hr />
                                </div>
                            @endforeach
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

                        {{-- @if ($profile->hasRole('free') || $profile->hasRole('silver'))
                            <div class="row">
                                <div class="col-md-12 mt-3 mb-2">
                                    <a href="#">Fai l'upgrade del tuo abbonamento per
                                        ottenere vantaggi
                                        illimitati</a>
                                </div>
                            </div>
                        @endif --}}
                    </x-slot>
                </x-card>
            @endif
            <hr />
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p-0">
            @if (!$profile->hasRole('light'))
                <x-card type="subscription.v1">
                    <x-slot name="title">Light Plan</x-slot>
                    <x-slot name="subtitle">The perfect way to get started</x-slot>
                    <x-slot name="currency">€</x-slot>
                    <x-slot name="amount">6,00</x-slot>
                    <x-slot name="period">month</x-slot>
                    <x-slot name="payment_button">
                        <x-nexi-payment type="simple" amount="6.00" currency="EUR" text="ACQUISTA ABBONAMENTO" />
                    </x-slot>
                </x-card>
            @endif

            @if (!$profile->hasRole('full'))
                <x-card type="subscription.v1">
                    <x-slot name="title">Full Plan</x-slot>
                    <x-slot name="subtitle">Your full consents management</x-slot>
                    <x-slot name="currency">€</x-slot>
                    <x-slot name="amount">24,00</x-slot>
                    <x-slot name="period">year</x-slot>
                    <x-slot name="payment_button">
                        <x-nexi-payment type="simple" amount="24.00" currency="EUR" text="ACQUISTA ABBONAMENTO" />
                    </x-slot>
                </x-card>
            @endif
        </div>
    </div>
</div>
