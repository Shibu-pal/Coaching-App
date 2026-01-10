@extends('layout')
@section('title', 'Join as Faculty | Teacher Registration - Crystal Career Institute')
@section('meta_description','Passionate about teaching Science? Apply to join the expert faculty team at Crystal Career Institute, Dhulian.')

@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="text-center mb-4">Our Faculty</h1>
        <p class="text-center mb-5">Meet our dedicated team of experienced educators at Crystal Career Institute. Our faculty members are passionate about teaching and committed to helping students excel in NEET, JEE, and Board exams.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('images/Poster-4.jpg') }}" class="card-img-top" alt="Faculty Member 1">
        </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('images/Poster-5.jpg') }}" class="card-img-top" alt="Faculty Member 2">
        </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('images/Poster-6.jpg') }}" class="card-img-top" alt="Faculty Member 3">
        </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('images/Poster-7.jpg') }}" class="card-img-top" alt="Faculty Member 3">
        </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('images/Poster-8.jpg') }}" class="card-img-top" alt="Faculty Member 3">
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12 text-center">
        <a href="{{ route('teacher.register') }}" class="btn btn-primary btn-lg">Join as Faculty</a>
        
    </div>
</div>
@endsection
