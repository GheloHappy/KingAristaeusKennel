<html lang="en">
<head>
    <link rel="stylesheet" href="/css/header/nav.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    {{-- <script src="{{ asset('js/navToggle.js')}}"></script> --}}
</head>
<body>
    <div class='nav-bar' id='navBar'>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class='logo-nav'>
            <a href="/">King Aristaues Kennel</a>
        </div>
        <div class='nav-buttons' id='nav-buttons' >
            <a href="/"
                class="{{ request()->is('/') ? 'active' : '' }}">HOME</a>
            <a href="/"
                >BREEDS
            </a>
            <a href="location"
                class="{{ request()->is('location') ? 'active' : '' }}">LOCATION
            </a>
            <a href="/contact"
                class="{{ request()->is('contact') ? 'active' : '' }}">CONTACT
            </a>
            <a href="/"
                >DOG FOR SALE
            </a>
        </div>
    </div>
</body>
</html>