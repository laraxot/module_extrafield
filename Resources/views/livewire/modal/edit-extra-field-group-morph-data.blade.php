<x-modal.skin on-submit="save" :content-padding="false">
    <x-slot name="title">Parametri dei Dati Composti Associati</x-slot>



    @foreach ($form_data['services'] as $service_id => $service)
        <div class="col-md-12 mb-3">

            @foreach ($service as $group_id => $group)
                @if ($loop->index == 0)
                    <h3>Servizio {{ $group['service_name'] }}</h3><br>
                @endif

                <h4>{{ $group['name'] }}</h4><br>

                <h4>group_cardinality:
                    <input type="text" class="form-control"
                        wire:model="form_data.services.{{ $service_id }}.{{ $group_id }}.cardinality">
                </h4>
                <h4>group_mandatory:
                    <input type="checkbox" class="form-check-input"
                        wire:model="form_data.services.{{ $service_id }}.{{ $group_id }}.mandatory">
                </h4>
                <h4>group_can_verified:
                    <input type="checkbox" class="form-check-input"
                        wire:model="form_data.services.{{ $service_id }}.{{ $group_id }}.can_verified">
                </h4>

                <br>
                <h5>morph_cardinality: <input type="text" class="form-control"
                        wire:model="form_data.services.{{ $service_id }}.{{ $group_id }}.pivot.cardinality">
                </h5>
                <h5>morph_mandatory: <input type="checkbox" class="form-check-input"
                        wire:model="form_data.services.{{ $service_id }}.{{ $group_id }}.pivot.mandatory">
                </h5>
                <h5>morph_can_verified <input type="checkbox" class="form-check-input"
                        wire:model="form_data.services.{{ $service_id }}.{{ $group_id }}.pivot.can_verified">
                </h5>
                <br>

                <button class="btn btn-primary" wire:click="save('{{ $service_id }}','{{ $group_id }}')">
                    Save Group Settings
                </button>
            @endforeach
        </div>
    @endforeach

    <x-slot name="buttons">




        <button type="button" class="btn btn-danger" wire:click="$emit('modal.close')">
            Cancel
        </button>
    </x-slot>
</x-modal.skin>
