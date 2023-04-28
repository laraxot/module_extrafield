@extends('ui::layouts.wizard')
@section('content')
    <x-input.group type="textarea" name="note" class="mb-5" />
    {{-- <button type="button" class="btn btn-primary" wire:click="save()">Save</button> --}}
    <x-button wire:click="save()">save</x-button>
@endsection
