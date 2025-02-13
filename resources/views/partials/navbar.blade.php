<!-- Navbar -->
<div class="navbar">
    <div class="logo_div">
        <a href="{{ url('/') }}"><img src="{{ Vite::asset('resources/images/wartung-yellow-logo.svg') }}" id="logo_image" alt="Logo"></a>
    </div>

    <button class="menu_toggle" id="menu_toggle">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
    </button>

    <ul id="nav_menu">
        <li><a href="{{ url('/') }}">Acasă</a></li>
        <li><a href="{{ route('industrii') }}">Industrii</a></li>
        <li><a href="https://drive.google.com/file/d/1MIgspYcDoRG6Vr8GeBEtT7zO0SzA2L-C/view?usp=sharing">Catalog</a></li>
        <li><a href="{{ route('careers') }}">Cariere</a></li>
        <li><a href="{{ route('product-results') }}">Rezultate</a></li>
    </ul>
</div>