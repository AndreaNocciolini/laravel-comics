<div class="header">
    <div>
        <img src="{{ asset('../images/dc-logo.png') }}" alt="">
    </div>

    <ul class="header-ul">
        <li class="header-li"><a class="header-a {{ 'characters' === Route::currentRouteName() ? 'active' : '' }}" href="">CHARACTERS</a></li>
        <li class="header-li"><a class="header-a {{ 'home' === Route::currentRouteName() ? 'active' : '' }}" href=" {{ route('home') }}">COMICS</a></li>
        <li class="header-li"><a class="header-a {{ 'movies' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a></li>
        <li class="header-li"><a class="header-a {{ 'tv' === Route::currentRouteName() ? 'active' : '' }}" href="">TV</a></li>
        <li class="header-li"><a class="header-a {{ 'games' === Route::currentRouteName() ? 'active' : '' }}" href="">GAMES</a></li>
        <li class="header-li"><a class="header-a {{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}" href="">COLLECTIBLES</a></li>
        <li class="header-li"><a class="header-a {{ 'videos' === Route::currentRouteName() ? 'active' : '' }}" href="">VIDEOS</a></li>
        <li class="header-li"><a class="header-a {{ 'fans' === Route::currentRouteName() ? 'active' : '' }}" href="">FANS</a></li>
        <li class="header-li"><a class="header-a {{ 'news' === Route::currentRouteName() ? 'active' : '' }}" href="">NEWS</a></li>
        <li class="header-li"><a class="header-a {{ 'shop' === Route::currentRouteName() ? 'active' : '' }}" href="">SHOP</a></li>
    </ul>
</div>

<div class="jumbo">
</div>