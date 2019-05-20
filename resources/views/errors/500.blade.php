@extends('layouts.error')
@section('content')
  @include('components.error-message', ['code' => '500', 'message' => 'システムがエラーを返しました。', 'visible_back' => false])
@endsection
