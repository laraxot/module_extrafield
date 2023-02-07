@extends('ui::layouts.wizard')
@section('content')
    <x-input.group type="select" name="group_id" :options="$group_opts" class="mb-5" />
    {{-- <button type="button" class="btn btn-primary" wire:click="save()">Save</button> --}}
@endsection
