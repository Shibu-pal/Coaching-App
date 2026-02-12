@extends('layout')

@section('title', '403 - Access Forbidden | Crystal Career Institute')
@section('robots', 'noindex, nofollow')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1 fw-bold" style="color: #4a0000;">403</h1>
    <h2 class="mb-4" style="color: #4a0000;">Access Forbidden</h2>
    <p class="lead mb-5">You do not have permission to access this page. If you believe this is an error, please contact the administrator.</p>
    
    <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('home') }}" class="btn btn-lg px-5 shadow-sm text-white" style="background-color: #004d40;">
            Back to Home
        </a>
        <button onclick="window.history.back();" class="btn btn-lg btn-outline-secondary px-5 shadow-sm">
            Go Back
        </button>
    </div>
</div>
@endsection