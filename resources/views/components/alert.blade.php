@if(count($errors) > 0) 
  @foreach ($errors->all() as $error)
  <div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ $error }}</p>
  </div>
  @break;
  @endforeach
@elseif(isset($alert))
  <div class="uk-alert-{{ $alert['type'] }}" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>{{ $alert['message'] }}</p>
  </div>
@endif
