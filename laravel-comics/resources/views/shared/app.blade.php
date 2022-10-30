<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel Comics</title>

   <link rel="shortcut icon" href="" type="image/x-icon">
   <link rel="stylesheet" href="css/style.css">

   <script type="text/javascript" src="js/script.js" defer></script>
</head>
<body>
    <header>
        @include('shared.header')
    </header>

    <main>
        @yield('mainAreaComponent')
    </main>

    <footer>
        @include('shared.footer')
    </footer>
</body>
</html>
