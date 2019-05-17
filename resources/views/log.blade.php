@extends('layouts.app')

@section('content')
<h3 class="uk-heading-bullet">ログ一覧</h3>
<ul class="uk-list uk-list-striped">
@foreach($gags as $gag)
<li>{{$gag->text}}({{$gag->yomi}})を追加</li>
@endforeach
</ul>
@endsection
