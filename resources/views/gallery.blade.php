@extends('layout')
@section('title', 'Gallery | Crystal Career Institute - NEET & JEE Coaching')

@section('active', 'gallary')
@section('meta_description', 'View our classroom, successful students, and campus activities at Crystal Career Institute, Dhulian.')
{{-- @section('robots', 'noindex, nofollow') --}}
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mb-4">Our Institute</h1>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-4">
            <img src="{{ asset('images/outside-1.jpeg') }}" alt="Institute Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md">
            <img src="{{ asset('images/outside-2.jpeg') }}" alt="Institute Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md">
            <img src="{{ asset('images/outside-3.jpeg') }}" alt="Institute Image" class="d-block w-100 home-image-height">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12">
            <h2 class="mb-4">Bedroom</h2>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-4">
            <img src="{{ asset('images/bed-1.jpeg') }}" alt="Bedroom Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md">
            <img src="{{ asset('images/bed-2.jpeg') }}" alt="Bedroom Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md">
            <img src="{{ asset('images/bed-3.jpeg') }}" alt="Bedroom Image" class="d-block w-100 home-image-height">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12">
            <h2 class="mb-4">Hall and Study point</h2>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-3">
            <img src="{{ asset('images/hall-1.jpeg') }}" alt="Hall and Study point Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/hall-2.jpeg') }}" alt="Hall and Study point Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/hall-3.jpeg') }}" alt="Hall and Study point Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md-3">
            <img src="{{ asset('images/hall-4.jpeg') }}" alt="Hall and Study point Image" class="d-block w-100 home-image-height">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12">
            <h2 class="mb-4">Classroom</h2>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col-md-4">
            <img src="{{ asset('images/classroom.jpeg') }}" alt="Classroom Image" class="d-block w-100 home-image-height">
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-12">
            <h2 class="mb-4">Balcony</h2>
        </div>
    </div>
    <div class="row pt-3 pb-5">
        <div class="col-md-4">
            <img src="{{ asset('images/balcony-1.jpeg') }}" alt="Balcony Image" class="d-block w-100 home-image-height">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/balcony-2.jpeg') }}" alt="Balcony Image" class="d-block w-100 home-image-height">
        </div>
    </div>
@endsection