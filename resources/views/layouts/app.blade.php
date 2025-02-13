<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Wartung')</title>

    <!-- Link to your compiled CSS -->
    @vite([
        'resources/css/app.css',
        'resources/css/navbar.css',
        'resources/css/footer.css',
        'resources/css/home.css'
    ])

    @if(Request::is('privacy-policy'))
        @vite('resources/css/privacy-policy.css')
    @elseif(Request::is('cookies-policy'))
        @vite('resources/css/cookie-policy.css')
    @elseif(Request::is('careers'))
        @vite('resources/css/careers.css')
    @elseif(Request::is('product-results'))
        @vite('resources/css/product-results.css')
    @elseif(Request::is('industrii'))
        @vite('resources/css/industrii.css')
    @endif

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    {{-- Google Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" rel="stylesheet">

    <script src="https://kit.fontawesome.com/81b1f593f6.js" crossorigin="anonymous"></script>

    @yield('head')
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')

    <!-- Link to your compiled JavaScript -->
    @vite(['resources/js/app.js', 'resources/js/navbar.js', 'resources/js/home.js'])
</body>
</html>