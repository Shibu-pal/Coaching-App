@extends('layout')

@section('title', '401 - Unauthorized | Crystal Career Institute')
@section('robots', 'noindex, nofollow')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1 fw-bold" style="color: #004d40;">401</h1>
    <h2 class="mb-4" style="color: #004d40;">Authentication Required</h2>
    <p class="lead mb-5">You must be logged in to access this section of the portal.</p>
    
    <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('teacher.login') }}" class="btn btn-lg px-4 shadow-sm text-white" style="background-color: #004d40;">Teacher Login</a>
        <a href="{{ route('home') }}" class="btn btn-lg btn-outline-success px-4 shadow-sm">Back to Home</a>
    </div>
</div>
@endsection