<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Header</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/js/app.js')
    

</head>
<body>

    <header id="app_header">
        @include('partials.header')
    </header>
    
    <main>
        @include('partials.jumbo')
        @include('partials.appComics')
        @include('partials.blue')

    </main>

    <footer>
        @include('partials.footerTop')
        @include('partials.footerBottom')
    </footer>
</body>
</html>


        
    