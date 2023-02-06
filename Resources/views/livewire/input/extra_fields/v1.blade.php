<div>
    <h1>Extra Fields</h1>
    @foreach ($groups as $group => $extrafields_models)
        <p>{{ $group }}</p>
        @foreach ($extrafields_models as $extrafields_model)
            <p>{{ $extrafields_model['name'] }}</p>
        @endforeach
        {{-- puoi fare una cancellazione per ogni gruppo di campi --}}
        <button type="button" class="btn btn-primary"
            wire:click="$emit('modal.open', 'modal.extra-fields.delete-data',{'model_type': '{{ str_replace('\\', '\\\\', $model::class) }}','model_id': {{ $model->id }}})">Delete</button>
    @endforeach

    {{-- dddx($model->pivot) --}}
    <button type="button" class="btn btn-primary"
        onclick="Livewire.emit('modal.open', 'modal.extra-fields.add-data', {'model_type': '{{ str_replace('\\', '\\\\', $model::class) }}', 'model_id': '{{ $model->id }}'})">
        Add
    </button>
</div>
