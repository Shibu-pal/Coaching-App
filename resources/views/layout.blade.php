<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="zuvqVRF_iV-e27q4fRjDkuePmCfIKLxBbg-uRz564KM" />
    <title>@yield('title', 'Crystal Career Institute')</title>
    <meta name="description" content="@yield('meta_description', 'Crystal Career Institute provides expert coaching for NEET, JEE, and Board exams (XI-XII Science) in Dhulian, Murshidabad. Join us for clarity and excellence.')">
    <meta name="author" content="Shibadipta Pal">
    <meta name="copyright" content="Crystal Career Institute 2025">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <meta property="og:title" content="@yield('title', 'Crystal Career Institute')">
    <meta property="og:description" content="@yield('meta_description', 'Crystal Career Institute provides expert coaching for NEET, JEE, and Board exams (XI-XII Science) in Dhulian, Murshidabad. Join us for clarity and excellence.')">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    @if(Request::is('admin/*') || Request::is('teacher/*') || Request::is('student/*'))
        <meta name="robots" content="noindex, nofollow">
        <meta http-equiv="X-Frame-Options" content="deny">
     @else
        <meta name="robots" content="index, follow">
    @endif
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="{{ route('home') }}"><span class="navbar-brand mb-0 h1">Crystal Career Institute</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('get_register') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Registration</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('get_register','xi_science') }}">Xi Science</a></li>
                            
                            <li class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">NEET</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('get_register','neet_freser') }}">Xii Passed </a></li>
                                    <li><a class="dropdown-item" href="{{ route('get_register','neet_repeater') }}">Repeaters</a></li>
                                    <li><a class="dropdown-item" href="{{ route('get_register','test_series') }}">Test Series</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('teacher.login') ? 'active' : '' }}" href="{{ route('teacher.login') }}">Teacher's Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('faculty') ? 'active' : '' }}" href="{{ route('faculty') }}">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container px-lg-5 py-5">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @yield('content')
    </div>
    <footer class="text-bg-info py-3">
        <div class="container">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="{{ route('teacher.login') }}" class="nav-link px-2 text-body-secondary">Teacher's Login</a></li>
                <li class="nav-item"><a href="{{ route('faculty') }}" class="nav-link px-2 text-body-secondary">Facultu</a></li>
                <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link px-2 text-body-secondary">Gallery</a></li>
            </ul>
            <p class="text-center text-body-info">© 2026 All Rights Reserved Crystal Career Institute, W.B.</p>
        </div>
    </footer>
    <script src=""></script>
  </body>
</html>