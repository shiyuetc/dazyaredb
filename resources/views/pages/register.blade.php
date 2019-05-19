@extends('layouts.app')

@section('content')
<ul uk-tab>
  <li class="{{ Request::is('admin/register') ? 'uk-active' : '' }}">
    <a onclick="location.href='{{ route('register') }}'"><span class="uk-icon" uk-icon="icon:file-edit"></span>&nbsp;新規登録</a>
  </li>
</ul>
@if(isset($alert))
<div class="uk-alert-{{ $alert['type'] }}" uk-alert>
  <a class="uk-alert-close" uk-close></a>
  <p>{{ $alert['message'] }}</p>
</div>
@endif
<h3 class="uk-heading-bullet">だじゃれの新規登録</h3>
<form class="uk-form-stacked" method="POST" action="{{ route('register') }}">
  {{ csrf_field() }}
  <div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">だじゃれ</label>
    <input class="uk-input uk-form-width-large" type="text" name="text" maxlength="50" required autocomplete="off">
  </div>
  <div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">読み(ひらがな)</label>
    <input class="uk-input uk-form-width-large" type="text" name="yomi" maxlength="50" required autocomplete="off">
  </div>
  <button class="uk-button uk-button-primary" type="submit">新規登録</button>
</form>
@endsection