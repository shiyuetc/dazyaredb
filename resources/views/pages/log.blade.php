@extends('layouts.app')

@section('content')
@php
$command_array_jp = ['create' => '追加', 'update' => '更新', 'destroy' => '削除'];
@endphp
<h3 class="uk-heading-bullet">ログ一覧</h3>
<ul class="uk-list uk-list-striped">
@foreach($logs as $log)
  <li class="uk-text-small">
    {{ $log->created_at }}
    {{ $log->user_id }}さんが
    [ID:<a href="gag/{{ $log->gag_id }}">{{ $log->gag_id }}</a>]
    @if($log->command == 'create' || $log->command == 'destroy') {{ $log->after_text }}({{ $log->after_yomi }})を 
    @else {{ $log->before_text }}({{ $log->before_yomi }})を 
    {{ $log->after_text }}({{ $log->after_yomi }})に @endif
    {{ $command_array_jp[$log->command] }}
  </li>
@endforeach
</ul>
<ul class="uk-pagination uk-flex-center" uk-margin>
  <li class="{{ $page == 1 ? 'uk-disabled' : '' }}"><a href="?page={{ $page - 1 }}"><span uk-pagination-previous></span></a></li>
  <li class="uk-active"><a href="#">{{ $page }}ページ</a></li>
  <li class="{{ $page == 999 ? 'uk-disabled' : '' }}"><a href="?page={{ $page + 1 }}"><span uk-pagination-next></span></a></li>
</ul>
@endsection
