<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <header>
        {{-- Area relativa alla barra menu -> FILE: nav.blade.php <-> SCSS: header.scss --}}
        <nav>
            @include('shared.nav')
        </nav>
    </header>

    <main>
        @yield('mainAreaComponent')
    </main>

    <footer>
        {{-- Area relativa all'area Footer superiore -> FILE: footerTop.blade.php <-> SCSS: footer.scss --}}
        <div class="areaLinksTop"
            style="background-image: url('images/footer-bg.jpg'); width: 100%; background-size: cover; background-repeat: no-repeat;">
            @include('shared.footerTop')
        </div>
        {{-- Area relativa all'area Footer inferiore -> FILE: footerBottom.blade.php <-> SCSS: footer.scss --}}
        <div class="areaLinksBottom">
            @include('shared.footerBottom')
        </div>
    </footer>
</body>

</html>
