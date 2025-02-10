<!-- Navbar -->
<div class="navbar">
    <div class="logo_div">
        <a href="index.php"><img src="/images/wartung-logo.png" id="logo_image" alt="Logo"></a>
    </div>

    <button class="menu_toggle" id="menu_toggle">
        <div class="bar bar1"></div>
        <div class="bar bar2"></div>
        <div class="bar bar3"></div>
    </button>

    <ul id="nav_menu">
        <li><a href="{{ url('index.php') }}" class="active">HOME</a></li>
        <li><a onclick="openBookingModal()">CONTACT</a></li>
        <li><a href="#programming_section">WEB DEV</a></li>
        <li><a href="automation.php">AUTOMATION</a></li>
        <li><a href="#digital_art_section">DIGITAL ART</a></li>
    </ul>
</div>