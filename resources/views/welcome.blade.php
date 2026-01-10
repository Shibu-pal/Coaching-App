@extends('layout')
@section('title', 'Crystal Career Institute | Best NEET & JEE Coaching in Dhulian')

@section('active', 'home')
@section('meta_description', 'Crystal Career Institute in Dhulian, Murshidabad offers expert coaching for NEET, JEE, and Board exams (XI-XII Science). Build your career with expert guidance.')
{{-- @section('robots', 'noindex, nofollow') --}}
@section('content')
    <div class="bg-white border-top shadow-sm">
        <div class="container pb-3">
            <div class="row align-items-center text-center text-md-start">
                <div class="col-md-2 mb-3 mb-md-0">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 80px;" class="me-2" loading="lazy">
                    </div>
                </div>

                <div class="col-md-7 mb-3 mb-md-0 text-center">
                    <h2 class="fw-bold mb-0" style="color: #004d40;">CRYSTAL CAREER INSTITUTE</h2>
                    
                    <div class="py-1 px-3 my-2" style="background-color: #4a0000;">
                        <span class="fw-bold text-warning">NEET | JEE | BOARD (XI-XII SCIENCE)</span>
                    </div>
                    
                    <p class="h5 fw-bold mb-0 mt-2">
                        Call Us: <a href="tel:9242269090" class="text-decoration-none text-dark">9242269090</a> | 
                        <a href="tel:9242769090" class="text-decoration-none text-dark">9242769090</a>
                    </p>
                </div>

                <div class="col-md-3 text-center">
                    <h4 class="fw-bold mb-0" style="color: #004d40;">ADMISSION OPEN</h4>
                    <div class="border border-danger border-2 py-1 px-2 my-1 d-inline-block">
                        <span class="text-danger fw-bold small">TEST SERIES & CRASH COURSE</span>
                    </div>
                    <h3 class="text-danger fw-bold">NEET-2026</h3>
                    <a class="nav-link text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">Online Application
                        <img src="{{ asset('images/newgificon.gif') }}" alt="alternatetext" style="width: 15%;">
                    </a>
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
                </div>
            </div>
        </div>

        <div class="py-2 text-center" style="background-color: #004d40;">
            <div class="container">
                <p class="mb-0 text-warning fw-bold small">
                    ADD: DHULIAN, DAKBANGLOW (NEAR DDH HOSPITAL), MURSHIDABAD, PIN - 742202
                </p>
            </div>
        </div>
    </div>
    <div id="carouselExampleAutoplaying" class="carousel slide mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ratio ratio-21x9">
                <img src="{{ asset('images/Poster-1.jpg') }}" class="d-block w-100 object-fit-contain bg-white" alt="Crystal Career Institute NEET Coaching Poster" loading="lazy">
            </div>
            <div class="carousel-item ratio ratio-21x9">
                <img src="{{ asset('images/Poster-2.jpg') }}" class="d-block w-100 object-fit-contain bg-white" alt="Crystal Career Institute NEET Coaching Poster" loading="lazy">
            </div>
            <div class="carousel-item ratio ratio-21x9">
                <img src="{{ asset('images/Poster-3.jpg') }}" class="d-block w-100 object-fit-contain bg-white" alt="Crystal Career Institute NEET Coaching Poster" loading="lazy">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="py-5 text-center bg-dark text-white rounded mt-4">
        <div class="container px-4">
            <h1 class="display-5 fw-bold text-success">CRYSTAL CAREER INSTITUTE</h1>
            <p class="lead mb-0">NEET | JEE | BOARD (XI-XII SCIENCE)</p>
            <h4 class="fst-italic mb-4" style="color: skyblue">Crystal Institute was born from a simple yet profound vision:</h4>
            <div class="border border-success border-2 p-4 rounded mx-auto" style="max-width: 800px;">
                <h4 class="fst-italic mb-0" style="color: lightgreen">To bring clarity, excellence, and purpose to science education.</h4>
                <p class="fs-italic mb-0">As a teacher and mentor, I've seen how the right guidance can transform a Student's future not just academically, but also in terms of confidence and character. This institute is more than a coaching centre. It is a unit of educational research, study, and coaching. We specialise in NEET preparation, Class XI & XII Science blending clarity with excellence, built under a trust that values integrity, innovation, and student success.
At Crystal Career Institute, every lesson is crafted with care, every student is seen as a future achiever, and every day is a step toward excellence.</p>
                <hr class="border-success opacity-50">
                <small class="text-uppercase" style="color: lightgreen">— Dr. Ejaj Ahmmed (Educator and Founder)</small>
            </div>
        </div>
    </section>

    <div class="row mt-5 align-items-center">
        <div class="col-lg-7">
            <h5 class="fw-bold" style="color: #c3754e">CRYSTAL NEET Test Series 2026: Topic wise syllabus and schedule</h5>
            <p style="color: #c3754e">Target: NEET(UG) 2026 (Class XII / XII Pass / Repeater Students)</p>
            
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <div>
                    <strong>Launching from 4th January 2026!</strong> NTA-Level Simulation & 18 High-Quality Tests.
                </div>
            </div>

            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>18 Tests:</strong> Part Syllabus & Full Syllabus.</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Expert Analysis:</strong> Detailed discussions and strategies.</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Smart Tools:</strong> Question-level insights and bookmarks.</li>
            </ul>
        </div>
        
        <div class="col-lg-5">
            <div class="card border-success shadow-sm">
                <div class="card-header bg-success text-white text-center fw-bold">SPECIAL OFFER</div>
                <div class="card-body text-center p-4">
                    <h5 class="card-title text-muted">Registration at only ₹99/-</h5>
                    <p class="card-text mb-1">First 2 tests FREE for quality comparison.</p>
                    <div class="py-3">
                        <span class="text-decoration-line-through text-danger fs-4">₹6999/-</span>
                        <span class="display-6 fw-bold text-success mx-2">₹999/-</span>
                    </div>
                    <p class="small text-muted font-monospace">Only for First 100 Students</p>
                    {{-- <a href="{{ route('get_register','test_series') }}" class="btn btn-success btn-lg w-100">Register Now</a> --}}
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">
    <!-- Notice Board Section -->
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-success">Notice Board</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Latest Notices</h5>
                    </div>
                    <div class="card-body">
                        @if($notices->count() > 0)
                            <ul class="list-group list-group-flush">
                                @foreach($notices as $notice)
                                    <li class="list-group-item">
                                        <strong>{{ $notice->notice_name }}</strong><br>
                                        <small class="text-muted">Posted on: {{ $notice->notice_date }}</small>
                                        @if($notice->notice_pdf)
                                            <br><a href="{{ Storage::url($notice->notice_pdf) }}" target="_blank" class="btn btn-sm btn-primary mt-1">View PDF</a>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-center text-muted">No notices available at the moment.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-5">
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="p-4 bg-light rounded shadow-sm h-100 border-start border-success border-4">
                <h3 class="fw-bold mb-3 text-success">Courses Offered</h3>
                <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent">● Class XI & XII Science</li>
                    <li class="list-group-item bg-transparent">● NEET Foundation & Crash Courses</li>
                    <li class="list-group-item bg-transparent">● Regular Test Series & Doubt-Clearing</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-4 bg-light rounded shadow-sm h-100 border-start border-success border-4">
                <h3 class="fw-bold mb-3 text-success">Why Choose Us?</h3>
                <div class="row small">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li>■ Expert Faculty</li>
                            <li>■ Small Batch Sizes</li>
                            <li>■ Research-based Methods</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li>■ Board & NEET Focus</li>
                            <li>■ Regular Tracking</li>
                            <li>■ Motivational Environment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center bg-success text-white p-3 rounded mb-5">
        <p class="mb-0">Smart classrooms with modern teaching aids || Library & study resources || Online/Hybrid learning</p>
    </div>
@endsection