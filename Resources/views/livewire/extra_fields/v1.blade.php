<div>
    <div class="row">
        <div class="col-4">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ $model->avatar() }}"
                            alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{ $model->handle() }}</h3>

                    <ul class="list-group list-group-unbordered mb-3">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                <a href="#" wire:click="showCat({{ $category->id }})">
                                    <b>{{ $category->name }}</b>
                                    <span class="float-right">{{-- $category->countMyUserDatas --}}</span>
                                </a>
                            </li>
                        @endforeach

                    </ul>

                </div>

            </div>

        </div>


        <div class="col-8">
            @if (!empty($category_name))
                <x-card>
                    <x-slot name="title">{{ $category_name }}</x-slot>

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
                            onclick="Livewire.emit('modal.open', 'modal.extra-fields.add-data', {'cat_id': {{ $cat_id }},'model_type': '{{ $model_type }}','model_id': {{ $model_id }}})">
                            Add
                        </button>
                    </x-slot>

                </x-card>
            @endif
        </div>

    </div>
</div>
