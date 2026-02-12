@extends('layout')

@section('title', '419 - Page Expired | Crystal Career Institute')
@section('robots', 'noindex, nofollow')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1 fw-bold text-secondary">419</h1>
    <h2 class="mb-4">Session Expired</h2>
    <p class="lead mb-5">Your session has expired due to inactivity. Please refresh the page and try again.</p>
    <button onclick="window.location.reload();" class="btn btn-outline-success btn-lg px-5 shadow-sm">Refresh Page</button>
</div>
@endsection