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

    </header>
    @include('partials.header')

    
</body>
</html>

{{--
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contacts">Contacts</a></li>
        </ul>
    </nav>
    <h1>Hello World</h1>
    <h1>{{$name}}</h1>
    <p>You are {{ $age }} years old.</p>
    --}}
    {{-- --}}

    <main>
        {{--
            @yield('content')
            --}}
        </main>
        
        @include('partials.footerTop')
        @include('partials.footerBottom')
        
        
    <footer>
    
    </footer>
    