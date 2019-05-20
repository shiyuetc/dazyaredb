@extends('layouts.error')
@section('content')
  @include('components.error-message', ['code' => '403', 'message' => 'そのページを表示する権限がありません。', 'visible_back' => true])
@endsection
