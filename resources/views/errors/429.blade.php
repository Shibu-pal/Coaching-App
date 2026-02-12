@extends('layout')

@section('title', '429 - Too Many Requests | Crystal Career Institute')
@section('robots', 'noindex, nofollow')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1 fw-bold text-warning">429</h1>
    <h2 class="mb-4">Slow Down!</h2>
    <p class="lead mb-5">You have sent too many requests in a short amount of time. Please wait a minute and try again.</p>
    
    <div class="p-3 border border-warning d-inline-block rounded mb-4">
        <span class="text-dark fw-bold">This helps keep our registration system secure.</span>
    </div>
    <br>
    <a href="{{ route('home') }}" class="btn btn-dark btn-lg px-5 shadow-sm">Back to Home</a>
</div>
@endsection