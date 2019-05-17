@extends('layouts.app')

@section('content')
@php
$gag_list_score = 1;
@endphp
<h3 class="uk-heading-bullet">だじゃれ一覧({{count($gags)}}件)</h3>
<div class="uk-margin">
  <form class="uk-search uk-search-default uk-width-expand" action="{{ route('home') }}" method="GET">
    <span uk-search-icon></span>
    <input class="uk-search-input" type="search" name="q" placeholder="Search..." value="{{$q}}" autocomplete="off">
  </form>
</div>
@if(isset($q))
<div class="uk-alert-primary" uk-alert>
  <a class="uk-alert-close" uk-close></a>
<p>『{{$q}}』の検索結果：</p>
</div>
@endif
<table class="uk-table uk-table-divider uk-table-small uk-table-hover">
  <thead>
    <tr>
      <th class="uk-table-shrink">#</th>
      <th class="uk-table-expand">だじゃれ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($gags as $gag)
    <tr>
      <td>{{$gag_list_score++}}</td>
      <td><a href="gag/{{$gag->id}}">{{$gag->text}}</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
