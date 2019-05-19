<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
  @include('subviews.head')
  </head>
  <body>
    <div id="app">
    @include('subviews.header')
      <div id="main">
      @include('subviews.container')
      </div> 
    </div>
  @include('subviews.footer')
  </body>
</html>
