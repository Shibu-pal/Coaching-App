<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - {{ $teacher->name }} | Teacher Portal</title>
    <meta name="description" content="@yield('meta_description', 'Crystal Career Institute provides expert coaching for NEET, JEE, and Board exams (XI-XII Science) in Dhulian, Murshidabad. Join us for clarity and excellence.')">
    
    <link rel="canonical" href="{{ url()->current() }}">
    
    <meta property="og:title" content="Dashboard - {{ $teacher->name }} | Teacher Portal">
    <meta property="og:description" content="Manage your classes, subjects, and student information on the Crystal Career Institute teacher portal.">
    <meta property="og:image" content="{{ asset('images/logo.png') }}"> <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta name="robots" content="noindex, nofollow">
    <meta http-equiv="X-Frame-Options" content="deny">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Teacher Profile: {{ $teacher->name }}</h5>
        
        <form class="d-flex" method="post" action="{{ route('teacher.logout') }}">
                @csrf
                {{-- <input type="hidden" name="logout" value="@auth('admin')->user()->id"> --}}
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
            </div>
        <div class="row g-0">            
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Full Name</div>
                        <div class="col-sm-8 fw-bold">{{ $teacher->name }}</div>
                    </div>
                    <hr class="my-1">

                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Gender</div>
                        <div class="col-sm-8">
                            {{ ucfirst($teacher->gender) }}
                        </div>
                    </div>
                    <hr class="my-1">

                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Email</div>
                        <div class="col-sm-8">{{ $teacher->email }}</div>
                    </div>
                    <hr class="my-1">

                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Mobile No.</div>
                        <div class="col-sm-8">{{ $teacher->mobile }}</div>
                    </div>
                    <hr class="my-1">

                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Subject Name</div>
                        <div class="col-sm-8">{{ $teacher->departments->department_name }}</div>
                    </div>

                    
                </div>
            </div>
        </div> 
    </div>
    </div>
</body>
</html>