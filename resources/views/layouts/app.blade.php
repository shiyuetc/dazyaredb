<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="shiyu">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/vnd.microsoft.icon">
    <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
          <span class="hidden-md"><a href="{{ route('home') }}" class="uk-navbar-item uk-logo">Dazyaredb</a></span>
          <ul class="uk-navbar-nav">
            <li class="{{ Request::is('/') ? 'uk-active' : '' }}">
              <a href="{{ route('home') }}"><span class="uk-icon" uk-icon="icon:home"></span><span class="hidden-sm">&nbsp;ホーム</span></a>
            </li>
            <li class="{{ Request::is('log') ? 'uk-active' : '' }}">
              <a href="{{ route('log') }}"><span class="uk-icon" uk-icon="icon:file-text"></span><span class="hidden-sm">&nbsp;ログ</span></a>
            </li>
            <li class="{{ Request::is('document') ? 'uk-active' : '' }}">
              <a href="{{ route('document') }}"><span class="uk-icon" uk-icon="icon:rss"></span><span class="hidden-sm">&nbsp;APIマニュアル</span></a>
            </li>
          </ul>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            @guest
            <li class="{{ Request::is('login') ? 'uk-active' : '' }}">
              <a href="{{ route('login') }}"><span class="uk-icon" uk-icon="icon:sign-in"></span><span class="hidden-sm">&nbsp;管理者ログイン</span></a>
            </li>
            @else
            <li class="{{ Request::is('admin') ? 'uk-active' : '' }}">
              <a href="#"><span class="uk-icon" uk-icon="icon:user"></span><span class="hidden-sm">&nbsp;管理者メニュー</span></a>
              <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li class="{{ Request::is('admin') ? 'uk-active' : '' }}"><a href="{{ route('register') }}">管理者パネル</a></li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a></li>
                </ul>
              </div>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
      <div id="main">
        <div class="uk-margin-medium-top"></div>
        <div class="uk-container">
          @yield('content')
        </div>
      </div>
    </div>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
  </body>
</html>