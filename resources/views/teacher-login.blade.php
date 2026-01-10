@extends('layout')
@section('title', 'Teacher Login | Crystal Career Institute Faculty Portal')
@section('meta_description','Official login portal for faculty members of Crystal Career Institute. Manage student profiles and academic schedules.')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm"> {{-- Added shadow-sm for a modern look --}}
                    <div class="card-header"> {{-- Added some color to the header --}}
                        <h3 class="mb-0">Teacher Login</h3>
                    </div>
                    <div class="card-body">
                        
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('teacher.login.option') }}" class="needs-validation" novalidate>
                            @csrf

                            {{-- Email Field --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Password Field --}}
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       id="password" name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Login Button --}}
                            <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
                            
                            {{-- Register Redirect --}}
                            <div class="alert alert-light border mt-4 text-center" role="alert">
                                Don't have an account? 
                                <a href="{{ route('teacher.register') }}" class="alert-link">Create Account here</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection