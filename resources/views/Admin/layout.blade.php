<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('header') | Crystal Career Institute</title>
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-Frame-Options" content="deny">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Crystal Career Institute</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('admin.dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.student') ? 'active' : '' }}" href="{{ route('admin.student') }}">Student Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.teacher') ? 'active' : '' }}" href="{{ route('admin.teacher') }}">Teacher Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('admin.notice') ? 'active' : '' }}" href="{{ route('admin.notice') }}">Notice Management</a>
                </li>
            </ul>
            </div>
            <form class="d-flex" method="post" action="{{ route('admin.logout') }}">
                @csrf
                {{-- <input type="hidden" name="logout" value="@auth('admin')->user()->id"> --}}
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
  </body>
</html>