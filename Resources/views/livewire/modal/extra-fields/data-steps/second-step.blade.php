@extends('ui::layouts.wizard')
@section('content')
    @foreach ($fields as $field)
        {{--
        <x-input.field-arr :field="$field" /> <br/>
        --}}
        <x-input.group :type="$field['type']" :name="$field['name']" col_size="12" {{-- :label="$field['name']" --}} :options="$field['options']" />
    @endforeach
@endsection
