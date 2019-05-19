@extends('layouts.app')
@section('content')
  @include('components.gag-detail', ['gag' => $gag])
  @auth
    @include('components.gag-edit-form', ['gag' => $gag])
  @endauth
@endsection
