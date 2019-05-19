@extends('layouts.app')

@section('content')
@php
$command_array_jp = ['create' => '追加', 'update' => '更新', 'delete' => '削除'];
@endphp
<h3 class="uk-heading-bullet">ログ一覧</h3>
<ul class="uk-list uk-list-striped">
@foreach($logs as $log)
  <li class="uk-text-small">
    {{ $log->created_at }}
    {{ $log->user_id }}さんが
    [ID:<a href="gag/{{ $log->gag_id }}">{{ $log->gag_id }}</a>]
    {{ $log->after_text }}({{ $log->after_yomi }})を
    @if($log->command == 'update') {{ $log->before_text }}({{ $log->before_yomi }})に @endif
    {{ $command_array_jp[$log->command] }}
  </li>
@endforeach
</ul>
@endsection
