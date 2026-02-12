@extends('layout')

@section('title', '500 - Server Error | Crystal Career Institute')
@section('robots', 'noindex, nofollow')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1 fw-bold text-danger">500</h1>
    <h2 class="mb-4" style="color: #4a0000;">Internal Server Error</h2>
    <p class="lead mb-5">Something went wrong on our end. We are working to fix it. Please try again later.</p>
    <a href="{{ route('home') }}" class="btn btn-dark btn-lg px-5 shadow-sm">Back to Home</a>
</div>
@endsection