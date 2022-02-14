<div class="header">
    <div>
        <img src="{{ asset('../images/dc-logo.png') }}" alt="">
    </div>

    <ul class="header-ul">
        <li class="header-li"><a class="header-a {{ 'characters' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('characters') }}">CHARACTERS</a></li>
        <li class="header-li"><a class="header-a {{ 'home' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('home') }}">COMICS</a></li>
        <li class="header-li"><a class="header-a {{ 'movies' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a></li>
        <li class="header-li"><a class="header-a {{ 'tv' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('tv') }}">TV</a></li>
        <li class="header-li"><a class="header-a {{ 'games' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a></li>
        <li class="header-li"><a class="header-a {{ 'collectibles' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
        <li class="header-li"><a class="header-a {{ 'videos' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('videos') }}">VIDEOS</a></li>
        <li class="header-li"><a class="header-a {{ 'fans' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('fans') }}">FANS</a></li>
        <li class="header-li"><a class="header-a {{ 'news' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('news') }}">NEWS</a></li>
        <li class="header-li"><a class="header-a {{ 'shop' === Route::currentRouteName() ? 'active' : '' }}" href="{{ route('shop') }}">SHOP</a></li>
    </ul>
</div>

<div class="jumbo">
</div>