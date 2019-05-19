@extends('layouts.error')
@section('content')
<div style="text-align: center;">
  <h1 class="uk-heading-large">404 Error</h1>
  <p class="uk-text-small">お探しのページは存在しませんでした。</p>
  <a href="{{ route('home') }}">ホームに戻る</a>
</div>
@endsection
