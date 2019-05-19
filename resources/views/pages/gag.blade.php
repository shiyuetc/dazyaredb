@extends('layouts.app')

@section('content')
@if(isset($alert))
<div class="uk-alert-{{ $alert['type'] }}" uk-alert>
  <a class="uk-alert-close" uk-close></a>
  <p>{{ $alert['message'] }}</p>
</div>
@endif
<h3 class="uk-heading-bullet">だじゃれの詳細</h3>

@auth
<h3 class="uk-heading-bullet">だじゃれの編集</h3>
<form id="update" class="uk-form-stacked" method="POST" action="#">
  {{ csrf_field() }}
  <div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">だじゃれテキスト</label>
    <input class="uk-input uk-form-width-large" type="text" name="text" maxlength="50" value="{{ $gag->text }}" required autocomplete="off">
  </div>
  <div class="uk-margin">
    <label class="uk-form-label" for="form-stacked-text">読み(ひらがな)</label>
    <input class="uk-input uk-form-width-large" type="text" name="yomi" maxlength="50" value="{{ $gag->yomi }}" required autocomplete="off">
  </div>
  <button class="uk-button uk-button-primary" type="submit">編集を保存</button>
</form>
<h3 class="uk-heading-bullet">だじゃれの削除</h3>
<form id="destroy" class="uk-form-stacked" method="POST" action="{{ $gag->id }}/destroy">
  {{ csrf_field() }}
  <p class="uk-text-small">※削除した項目は元に戻すことはできません。</p>
  <button class="uk-button uk-button-danger" type="submit">このだじゃれを削除</button>
</form>
<script type="text/javascript">
document.getElementById("update").onsubmit = function() {
  return window.confirm('このだじゃれの編集を保存してよろしいですか？');
};
document.getElementById("destroy").onsubmit = function() {
  return window.confirm('このだじゃれを削除してよろしいですか？');
};
</script>
@endauth
@endsection
