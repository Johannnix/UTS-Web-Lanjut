<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raaikiri-Studio</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/IRAAIKIRI LOGO OFC 2.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <nav class="nav">
        <div class="kotakLogo">
            <img src="{{ URL::asset('images/IRAAIKIRI LOGO OFC 2.png') }}" alt="" class="logo">
        </div>
        <ul class="navList">
            <li class="navItem"><a href="/" class="navLink">Home</a></li>
            <li class="navItem"><a href="/about" class="navLink">About</a></li>
            <li class="navItem"><a href="/services" class="navLink">Services</a></li>
            <div class="kotakButton">
                <a href="/" class="btn button">Sign In</a>
                <a href="/daftar" class="button daftar">Sign Up</a>
            </div>
        </ul>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer">
        <p>© Copyright 2023. Johan & Viola </p>
    </footer>
</body>
</html>
