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
                                            <div class="flex-none">
                                                <i class="bi bi-person-lines-fill"></i>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <a href="#" wire:click="showCat({{ $category->id }})"
                                                    class="text-sm text-heading font-semibold mb-0">
                                                    {{ $category->name }}
                                                </a>
                                                <x-badge>{{ $category->e_counts }}</x-badge>

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
            <x-card>
                <x-slot name="title">{{ $category_name }}</x-slot>

                <x-slot name="txt">

                    @foreach ($groups as $group)
                        @include($view . '.group.v1')
                    @endforeach


                    <div class="row">
                        <div class="col-md-12 mt-3 mb-2">
                            <x-button wire:click="addGroup()" title="Add Group">Add</x-button>
                        </div>
                    </div>
                </x-slot>
            </x-card>

            <hr />
        </div>
    </div>

</div>
