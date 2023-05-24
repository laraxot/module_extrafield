@extends('ui::layouts.wizard')
@section('content')
    @foreach ($fields as $field)
        <x-input.group :type="$field['type']" :name="$field['name']" col_size="12" :options="$field['options']" />
        @livewire('extra-field-groups.morph.verified', ['can_verified' => $can_verified, 'extra_field_group_id' => $extra_field_group_id], key('item-' . $loop->iteration))
    @endforeach
@endsection
