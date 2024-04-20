<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Para agregar links que usemos siempre .. Bootstrap js css google-captcha etc --}}
    @include('partials.links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Link al css que utilicemos  
        nota, verificar si se puede manipular con un IF statement --}}
    <link rel="stylesheet" href="/css/@yield('css').css">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/navbar.css">
    
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    @yield('scripts') {{-- Para agregar JS extras --}}
    <script src="{{ url('/js/navbar/index.js') }}" defer></script>
</head>

<body>
    <div id="app">
        <header>
            {{-- Navbar --}}
            {{-- @include('partials.navbar') --}}
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
    </div>


</body>

</html>
