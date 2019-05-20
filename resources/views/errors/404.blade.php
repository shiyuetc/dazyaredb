@extends('layouts.error')
@section('content')
  @include('components.error-message', ['code' => '404', 'message' => 'お探しのページは存在しませんでした。', 'visible_back' => true])
@endsection
