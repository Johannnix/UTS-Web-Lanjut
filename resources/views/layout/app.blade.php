<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raaikiri-Studio</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/IRAAIKIRI LOGO OFC 2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <nav class="nav">
        <div class="kotakLogo">
            <img src="{{ URL::asset('images/IRAAIKIRI LOGO OFC 2.png') }}" alt="" class="logo">
        </div>
        <ul class="navList">
            @if (Route::currentRouteName() != 'dashboard' && Route::currentRouteName() != 'books.create')
            <li class="navItem"><a href="/" class="navLink">Home</a></li>
            <li class="navItem"><a href="/about" class="navLink">About</a></li>
            <li class="navItem"><a href="/services" class="navLink">Services</a></li>
            <li class="navItem"><a href="/log" class="navLink">Log</a></li>
                <div class="kotakButton">
                    <a href="/" class="btn button">Sign In</a>
                    <a href="/register" class="button daftar">Sign Up</a>
                </div>
            @else
                <div class="kotakProfile">
                    <img src="{{ URL::asset('images/pp.jpg') }}" alt="Profile" onclick="toggleDropdown()">
                    <div class="profileContent" id="profileContent">
                        <div class="tengah">
                            <div class="icon">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <a href="#">Profile</a>
                        </div>
                        <div class="garis"></div>
                        <div class="tengah">
                            <div class="icon">
                                <i class="bi bi-door-open-fill logout"></i>
                            </div>
                            <a href="{{ route('logout') }}">Logout</a>
                        </div>
                    </div>
                </div>
            @endif
        </ul>
    </nav>
    <br>
    <div class="container">
        @include('sweetalert::alert')
        @yield('content')
    </div>
    <footer class="footer">
        <p>© Copyright 2023. Johan & Viola </p>
    </footer>
    <script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>
