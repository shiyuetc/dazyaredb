<div class="uk-margin-medium-top"></div>
<div class="uk-container">
@yield('content-header')
@if(isset($alert))
  <div class="uk-alert-{{ $alert['type'] }}" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ $alert['message'] }}</p>
  </div>
@endif
@yield('content')
</div>
