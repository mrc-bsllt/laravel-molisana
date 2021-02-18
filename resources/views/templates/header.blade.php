<header>
  <img src="{{ asset('img/marchio-sito-test.png') }}" alt="logo-molisana">
  <ul id="nav-list" class="list-inline visible-lg-block">
    <li class="{{ Route::currentRouteName() == 'home' ? 'active':'' }}"><a href="{{ route('home') }}">Home</a></li>
    <li class="{{ Route::currentRouteName() == 'products' ? 'active':'' }}"><a href="{{ route('products') }}">Prodotti</a></li>
    <li class="{{ Route::currentRouteName() == 'news' ? 'active':'' }}"><a href="{{ route('news') }}">News</a></li>
  </ul>
  <div class="hamburger hidden-lg">
    <a href="#">
      <i class="fas fa-bars"></i>
    </a>
  </div>
</header>
