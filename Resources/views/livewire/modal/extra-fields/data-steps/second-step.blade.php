@extends('ui::layouts.wizard')
@section('content')
    {{--
    <div>
        @foreach ($attrs as $item)
            @if (isset($item['options']))
                <x-input.group :type="$item['type']" :name="$item['name']" :id="$item['id']" col_size="12" :label="$item['name']"
                    :options="$item['options']" />
            @else
                <x-input.group :type="$item['type']" :name="$item['name']" :id="$item['id']" col_size="12" :label="$item['name']" />
            @endif
        @endforeach
    </div>
    --}}

    @foreach($fields as $field)
        {{--
        <x-input.field-arr :field="$field" /> <br/>
        --}}
        <x-input.group :type="$field['type']" :name="$field['name']"  col_size="12" :label="$field['name']"
        :options="$field['options']" />
        
    @endforeach 
@endsection
