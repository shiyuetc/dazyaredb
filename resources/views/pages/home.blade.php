@extends('layouts.app')
@section('content')
  @include('components.gag-list', ['gag_total_count' => $gag_total_count, 'gags' => $gags, 'q' => $q, 'page' => $page])
  @include('components.pagination', ['page' => $page, 'query' => "q={$q}&"])
@endsection
