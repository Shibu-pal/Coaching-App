<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Download Admit Card | Student Dashboard</title>
    <meta name="description" content="@yield('meta_description', 'Crystal Career Institute provides expert coaching for NEET, JEE, and Board exams (XI-XII Science) in Dhulian, Murshidabad. Join us for clarity and excellence.')">
    
    <link rel="canonical" href="{{ url()->current() }}">
    
    <meta property="og:title" content="Download Admit Card | Student Dashboard">
    <meta property="og:description" content="Access and download your admit card for the upcoming entrance tests and exams at Crystal Career Institute.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}"> <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta name="robots" content="noindex, nofollow">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card text-center shadow">
        <div class="card-header bg-primary text-white">
            <h3>Student Dashboard</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">Admit Card Available</h5>
            <p class="card-text">Your admit card for the Session 2026-27 is ready for download.</p>
            
            <a href="{{ route('admit.download') }}" class="btn btn-success btn-lg">
                <i class="bi bi-download"></i> Download Admit Card
            </a>
        </div>
    </div>
</div>

</body>
</html>