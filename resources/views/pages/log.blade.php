@extends('layouts.app')
@section('content')
  @include('components.log-list', ['logs' => $logs])
  @include('components.pagination', ['page' => $page, 'query' => ''])
@endsection
