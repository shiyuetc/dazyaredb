@extends('layouts.app')

@section('content')
<h3 class="uk-heading-bullet">管理者ログインフォーム</h3>
@if($errors->has('id'))
<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
  <p>{{ $errors->first('id') }}</p>
  </div>
@endif
<form class="uk-form-stacked" method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}
  <div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">ログインID</label>
    <div class="uk-inline">
      <span class="uk-form-icon" uk-icon="icon: user"></span>
      <input class="uk-input uk-form-width-large" type="text" name="id" value="{{ old('id') }}" required>
    </div>
  </div>
  <div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">パスワード</label>
    <div class="uk-inline">
      <span class="uk-form-icon" uk-icon="icon: lock"></span>
      <input class="uk-input uk-form-width-large" type="password" name="password" required>
    </div>
  </div>
  <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
    <label><input class="uk-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> ログイン情報を保持</label>
  </div>
  <button class="uk-button uk-button-primary" type="submit">ログイン</button>
</form>
@endsection
