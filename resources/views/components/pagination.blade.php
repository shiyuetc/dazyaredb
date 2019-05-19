<ul class="uk-pagination uk-flex-center" uk-margin>
  <li class="{{ $page == 1 ? 'uk-disabled' : '' }}"><a href="?{{ $query }}page={{ $page - 1 }}"><span uk-pagination-previous></span></a></li>
  <li class="uk-active"><a href="#">{{ $page }}ページ</a></li>
  <li class="{{ $page == 999 ? 'uk-disabled' : '' }}"><a href="?{{ $query }}page={{ $page + 1 }}"><span uk-pagination-next></span></a></li>
</ul>
