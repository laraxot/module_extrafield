@extends('adm_theme::layouts.app')
@section('content')
    <livewire:user-extra-fields :model="$model" />
@endsection
