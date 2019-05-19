@extends('layouts.app')

@section('content')
@php
$gag_list_score = (((isset($page) ? $page : 1) - 1) * 200) + 1;
@endphp
<h3 class="uk-heading-bullet">だじゃれ一覧({{ $gag_total_count }}件)</h3>
<div class="uk-margin">
  <form class="uk-search uk-search-default uk-width-expand" action="{{ route('home') }}" method="GET">
    <span uk-search-icon></span>
    <input class="uk-search-input" type="search" name="q" placeholder="Search..." value="{{ $q }}" autocomplete="off">
  </form>
</div>
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
      <td>{{ $gag_list_score++ }}</td>
      <td><a href="gag/{{ $gag->id }}">{{ $gag->text }}</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
<ul class="uk-pagination uk-flex-center" uk-margin>
  <li class="{{ $page == 1 ? 'uk-disabled' : '' }}"><a href="?q={{ $q }}&page={{ $page - 1 }}"><span uk-pagination-previous></span></a></li>
  <li class="uk-active"><a href="#">{{ $page }}ページ</a></li>
  <li class="{{ $page == 999 ? 'uk-disabled' : '' }}"><a href="?q={{ $q }}&page={{ $page + 1 }}"><span uk-pagination-next></span></a></li>
</ul>
@endsection
