<div class="container bg-colorBlue">
    <div class="areaTopNav">
        <h5>DC POWER<span>SM</span> VISA&reg;</h5>
        <h5>ADDITIONAL DC SITES &#9660;</h5>
    </div>
</div>
<div class="container">
    <div class="areaMenu">
        <div class="img">
            <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt="Logo DC"></a>
        </div>
        <div class="menu">
            <ul>
                <li class="{{ request()->is('characters') ? 'active' : '' }}">
                    <a href="{{ route('characters') }}">CHARACTERS</a>
                </li>
                <li class="{{ request()->is('comics') ? 'active' : '' }}">
                    <a href="{{ route('comics') }}">COMICS</a>
                </li>
                <li class="{{ request()->is('movies') ? 'active' : '' }}">
                    <a href="{{ route('movies') }}">MOVIES</a>
                </li>
                <li class="{{ request()->is('tv') ? 'active' : '' }}">
                    <a href="{{ route('tv') }}">TV</a>
                </li>
                <li class="{{ request()->is('games') ? 'active' : '' }}">
                    <a href="{{ route('games') }}">GAMES</a>
                </li>
                <li class="{{ request()->is('collectibles') ? 'active' : '' }}">
                    <a href="{{ route('collectibles') }}">COLLECTIBLES</a>
                </li>
                <li class="{{ request()->is('videos') ? 'active' : '' }}">
                    <a href="{{ route('videos') }}">VIDEOS</a>
                </li>
                <li class="{{ request()->is('fans') ? 'active' : '' }}">
                    <a href="{{ route('fans') }}">FANS</a>
                </li>
                <li class="{{ request()->is('news') ? 'active' : '' }}">
                    <a href="{{ route('news') }}">NEWS</a>
                </li>
                <li class="{{ request()->is('shop') ? 'active' : '' }}">
                    <a href="{{ route('shop') }}">SHOP<span>&#9660;</span></a>
                </li>
            </ul>
        </div>
        <div class="search">
            <input type="text" name="search" id="inputSearch" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>

</div>
