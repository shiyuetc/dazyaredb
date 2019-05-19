<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
  @include('components.head')
  </head>
  <body>
    <div id="app">
    @include('components.header')
      <div id="main">
      @include('components.container')
      </div> 
    </div>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
  </body>
</html>
