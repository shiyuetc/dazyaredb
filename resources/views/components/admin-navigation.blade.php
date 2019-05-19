<ul uk-tab>
  <li class="{{ Request::is('admin/register') ? 'uk-active' : '' }}">
    <a onclick="location.href='{{ route('register') }}'"><span class="uk-icon" uk-icon="icon:file-edit"></span>&nbsp;新規登録</a>
  </li>
</ul>
