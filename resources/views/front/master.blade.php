<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTMS - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.css" />
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">KYUTE</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('front.home') }}" class="nav-link">Home</a></li>
            <li class="dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Course Category</a>
                <ul class="dropdown-menu">
                    <li><a href="" class="dropdown-item">Course One</a></li>
                    <li><a href="" class="dropdown-item">Course Two</a></li>
                </ul>
            </li>
            <li><a href="{{ route('front.about') }}" class="nav-link">About</a></li>
            <li><a href="{{ route('front.contact') }}" class="nav-link">Contact</a></li>
            <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
        </ul>
    </div>
</nav>
@yield('body')
<section class="py-2 bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-center">OTMSNew &copy;{{ date('Y') }} Copyrights | All rights reserved.</p>
            </div>
        </div>
    </div>

</section>

<script src="{{ asset('/') }}front/js/bootstrap.bundle.js"></script>
</body>
</html>
