@extends('layout')
@section('title', 'Join as Faculty | Teacher Registration - Crystal Career Institute')
@section('meta_description','Passionate about teaching Science? Apply to join the expert faculty team at Crystal Career Institute, Dhulian.')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Teacher Register</h3>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- Added 'needs-validation' and 'novalidate' --}}
                        <form method="POST" action="{{ route('teacher.register.option') }}" class="needs-validation" novalidate>
                            @csrf
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" 
                                       class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name') }}" required>
                                <div class="invalid-feedback">
                                    @error('name') {{ $message }} @else Please enter your full name. @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label d-block">Gender</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                {{-- Hidden feedback div for radio buttons --}}
                                <div class="invalid-feedback d-block">
                                    @error('gender') {{ $message }} @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required>
                                <div class="invalid-feedback">
                                    @error('email') {{ $message }} @else Please enter a valid email address. @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="mobile" class="form-label">Contact No.</label>
                                <input type="tel" 
                                       class="form-control @error('mobile') is-invalid @enderror" 
                                       id="mobile" name="mobile" value="{{ old('mobile') }}" required maxlength="10">
                                <div class="invalid-feedback">
                                    @error('mobile') {{ $message }} @else Please enter a 10-digit contact number. @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject Name</label>
                                <select name="department_id" id="subject" class="form-control @error('department_id') is-invalid @enderror" required>
                                    <option value="" disabled selected>--select subject name--</option>
                                    <option value="1" {{ old('department_id') == '1' ? 'selected' : '' }}>Physics</option>
                                    <option value="2" {{ old('department_id') == '2' ? 'selected' : '' }}>Chemistry</option>
                                    <option value="3" {{ old('department_id') == '3' ? 'selected' : '' }}>Mathematics</option>
                                    <option value="4" {{ old('department_id') == '4' ? 'selected' : '' }}>Biology</option>
                                </select>
                                <div class="invalid-feedback">
                                    @error('department_id') {{ $message }} @else Please select your primary subject. @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       id="password" name="password" required minlength="8">
                                <div class="invalid-feedback">
                                    @error('password') {{ $message }} @else Password must be at least 8 characters. @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="confirm" class="form-label">Confirm Password</label>
                                <input type="password" 
                                       name="password_confirmation" 
                                       id="confirm" 
                                       class="form-control @error('password_confirmation') is-invalid @enderror" required>
                                <div class="invalid-feedback">
                                    @error('password_confirmation') {{ $message }} @else Please confirm your password. @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Register</button>
                            
                            <div class="alert alert-light border mt-3 text-center" role="alert">
                                Already have an account? 
                                <a href="{{ route('teacher.login') }}" class="alert-link">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection