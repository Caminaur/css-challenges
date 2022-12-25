<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Para agregar links que usemos siempre .. Bootstrap js css google-captcha etc --}}
    @include('partials.links')

    {{-- Link al css que utilicemos  
        nota, verificar si se puede manipular con un IF statement --}}
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/navbar.css">
    @yield('scripts') {{-- Para agregar JS extras --}}
</head>

<body>
    <header>
        {{-- Navbar --}}
        @include('partials.navbar')
    </header>

    <main id="main">
        @yield('main')
    </main>

    <footer>
        {{-- Footer --}}
        @include('partials.footer')
    </footer>

    {{-- Scripts --}}
    @include('partials.scripts')


</body>

</html>
