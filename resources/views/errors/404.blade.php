@extends('layout')

@section('title', '404 - Page Not Found | Crystal Career Institute')
@section('robots', 'noindex, nofollow')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1 fw-bold text-success">404</h1>
    <h2 class="mb-4" style="color: #004d40;">Oops! Page Not Found</h2>
    <p class="lead mb-5">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
    <a href="{{ route('home') }}" class="btn btn-success btn-lg px-5 shadow-sm">Back to Home</a>
</div>
@endsection