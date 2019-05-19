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
  @include('components.footer')
  </body>
</html>
