<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Website')</title>

    <!-- Link to your compiled CSS -->
    @vite('resources/css/app.css')
    
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    {{-- Google Icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" rel="stylesheet">

    <script src="https://kit.fontawesome.com/81b1f593f6.js" crossorigin="anonymous"></script>

    
    {{-- Navbar Specific CSS --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    {{-- FOOTER Specific CSS --}}
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @if(Request::is('privacy-policy'))
    <link rel="stylesheet" href="{{ asset('css/privacy-policy.css') }}">
    @elseif(Request::is('cookies-policy'))
    <link rel="stylesheet" href="{{ asset('css/cookie-policy.css') }}">
    @elseif(Request::is('careers'))
    <link rel="stylesheet" href="{{ asset('css/careers.css') }}">
    @elseif(Request::is('product-results'))
    <link rel="stylesheet" href="{{ asset('css/product-results.css') }}">
    @elseif(Request::is('industrii'))
    <link rel="stylesheet" href="{{ asset('css/industrii.css') }}">
    @endif
    
    @yield('head')

</head>
<body>
    <!-- Include the navbar partial -->
    @include('partials.navbar')

    <!-- Main content container -->
    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')

    <!-- Link to your compiled JavaScript -->
    @vite(['resources/js/app.js', 'public/js/navbar.js', 'public/js/home.js'])
</body>
</html>