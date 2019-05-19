@extends('layouts.error')
@section('content')
<div style="text-align: center;">
  <h1 class="uk-heading-large">403 Error</h1>
  <p class="uk-text-small">そのページを表示する権限がありません。</p>
  <a href="{{ route('home') }}">ホームに戻る</a>
</div>
@endsection
