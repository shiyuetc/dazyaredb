<div style="text-align: center;">
  <h1 class="uk-heading-large">{{ $code }} Error</h1>
  <p class="uk-text-small">{{ $message }}</p>
  @if($visible_back)<a href="{{ route('home') }}">ホームに戻る</a>@endif
</div>