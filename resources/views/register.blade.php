@extends('layout')
@php
    [$pageTitle, $metaDesc] = match($register) {
        'xi_science' => [
            'Class XI Science Admission 2026 | Crystal Career Institute',
            'Enroll for Class XI Science coaching at Crystal Career Institute, Dhulian. Expert faculty for Physics, Chemistry, Biology, and Mathematics.'
        ],
        'neet_freser', 'neet_repeater' => [
            'NEET 2026 Preparation in Dhulian | Crystal Career Institute',
            'Specialized NEET coaching for Class XII and Repeaters. High-quality mock tests and expert analysis to crack Medical Entrance exams.'
        ],
        'test_series' => [
            'NEET 2026 Mock Test Series Registration | Crystal Career Institute',
            'Register for 18 NTA-level NEET mock tests starting Jan 2026. Expert analysis and smart insights at only ₹999.'
        ],
        default => [
            'Registration | Crystal Career Institute',
            'Register for various courses at Crystal Career Institute, Dhulian.'
        ],
    };
@endphp
@section('title', $pageTitle)
@section('meta_description', $metaDesc)
@section('content')
    <form method="POST" action="{{ route('post_register', ['register' => $register]) }}" enctype="multipart/form-data" class="needs-validation" novalidate>
        @csrf

        <div class="mb-3 row">
            <div class="col-sm-1">
                <label for="appliedFor" class="form-label">Applied for</label>
            </div>
            <div class="col-sm-11">
                <select name="applied_for" id="appliedFor" class="form-control @error('applied_for') is-invalid @enderror" disabled>
                    <option value="neet_freser" {{ old('applied_for', $register) == 'neet_freser' ? 'selected' : '' }}>NEET Freser</option>
                    <option value="neet_repeater" {{ old('applied_for', $register) == 'neet_repeater' ? 'selected' : '' }}>NEET Repeater</option>
                    <option value="xi_science" {{ old('applied_for', $register) == 'xi_science' ? 'selected' : '' }}>XI Sc.</option>
                    <option value="xii_science" {{ old('applied_for', $register) == 'xii_science' ? 'selected' : '' }}>XII Sc.</option>
                    <option value="test_series" {{ old('applied_for', $register) == 'test_series' ? 'selected' : '' }}>Test Series</option>
                </select>
                <div class="invalid-feedback">
                    @error('applied_for') {{ $message }} @else Please select a course. @enderror
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-1">
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="col-sm-11">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required>
                <div class="invalid-feedback">
                    @error('name') {{ $message }} @else Please enter your name. @enderror
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-1">
                <label for="email" class="form-label">Email Address</label>
            </div>
            <div class="col-sm-11">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required>
                <div class="invalid-feedback">
                    @error('email') {{ $message }} @else Please enter a valid email address. @enderror
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-1">
                <label for="contact" class="form-label">Contact No</label>
            </div>
            <div class="col-sm-11">
                <input type="number" name="contact" class="form-control @error('contact') is-invalid @enderror" id="contact" value="{{ old('contact') }}" maxlength="10" required>
                <div class="invalid-feedback">
                    @error('contact') {{ $message }} @else Please enter a 10-digit contact number. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="father_name" class="form-label">Father's Name</label>
            </div>
            <div class="col-sm-7">
                <input type="text" name="father_name" class="form-control @error('father_name') is-invalid @enderror" id="father_name" value="{{ old('father_name') }}" required>
                <div class="invalid-feedback">
                    @error('father_name') {{ $message }} @else Please enter father's name. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="father_occupation" class="form-label">Occupation</label>
            </div>
            <div class="col-sm-3">
                <input type="text" name="father_occupation" class="form-control @error('father_occupation') is-invalid @enderror" id="father_occupation" value="{{ old('father_occupation') }}" required>
                <div class="invalid-feedback">
                    @error('father_occupation') {{ $message }} @else Please enter occupation. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="mother_name" class="form-label">Mother's Name</label>
            </div>
            <div class="col-sm-7">
                <input type="text" name="mother_name" class="form-control @error('mother_name') is-invalid @enderror" id="mother_name" value="{{ old('mother_name') }}" required>
                <div class="invalid-feedback">
                    @error('mother_name') {{ $message }} @else Please enter mother's name. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="mother_occupation" class="form-label">Occupation</label>
            </div>
            <div class="col-sm-3">
                <input type="text" name="mother_occupation" class="form-control @error('mother_occupation') is-invalid @enderror" id="mother_occupation" value="{{ old('mother_occupation') }}" required>
                <div class="invalid-feedback">
                    @error('mother_occupation') {{ $message }} @else Please enter occupation. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="aadhar" class="form-label">Aadhaar No</label>
            </div>
            <div class="col-sm-7">
                <input type="number" name="aadhar" class="form-control @error('aadhar') is-invalid @enderror" id="aadhar" value="{{ old('aadhar') }}" maxlength="12" required>
                <div class="invalid-feedback">
                    @error('aadhar') {{ $message }} @else Please enter 12-digit Aadhaar number. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="DOB" class="form-label">DOB</label>
            </div>
            <div class="col-sm-3">
                <input type="date" name="DOB" id="DOB" class="form-control @error('DOB') is-invalid @enderror" value="{{ old('DOB') }}" required>
                <div class="invalid-feedback">
                    @error('DOB') {{ $message }} @else Please select date of birth. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="guardian_name" class="form-label">Guardian's Name</label>
            </div>
            <div class="col-sm-7">
                <input type="text" name="guardian_name" class="form-control @error('guardian_name') is-invalid @enderror" id="guardian_name" value="{{ old('guardian_name') }}" required>
                <div class="invalid-feedback">
                    @error('guardian_name') {{ $message }} @else Please enter guardian's name. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="relation" class="form-label">Relation</label>
            </div>
            <div class="col-sm-3">
                <input type="text" name="relation" class="form-control @error('relation') is-invalid @enderror" id="relation" value="{{ old('relation') }}" required>
                <div class="invalid-feedback">
                    @error('relation') {{ $message }} @else Please enter relation. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="vill" class="form-label">Village</label>
            </div>
            <div class="col-sm-5">
                <input type="text" name="vill" class="form-control @error('vill') is-invalid @enderror" id="vill" value="{{ old('vill') }}" required>
                <div class="invalid-feedback">
                    @error('vill') {{ $message }} @else Please enter village name. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="post" class="form-label">Post</label>
            </div>
            <div class="col-sm-5"> 
                <input type="text" name="post" class="form-control @error('post') is-invalid @enderror" id="post" value="{{ old('post') }}" required>
                <div class="invalid-feedback">
                    @error('post') {{ $message }} @else Please enter post office. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="ps" class="form-label">PS</label>
            </div>
            <div class="col-sm-5">
                <input type="text" name="ps" class="form-control @error('ps') is-invalid @enderror" id="ps" value="{{ old('ps') }}" required>
                <div class="invalid-feedback">
                    @error('ps') {{ $message }} @else Please enter police station. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="district" class="form-label">District</label>
            </div>
            <div class="col-sm-5">
                <input type="text" name="district" class="form-control @error('district') is-invalid @enderror" id="district" value="{{ old('district') }}" required>
                <div class="invalid-feedback">
                    @error('district') {{ $message }} @else Please enter district. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="pin" class="form-label">Pin</label>
            </div>
            <div class="col-sm-3">
                <input type="number" name="pin" class="form-control @error('pin') is-invalid @enderror" id="pin" value="{{ old('pin') }}" maxlength="6" required>
                <div class="invalid-feedback">
                    @error('pin') {{ $message }} @else Please enter valid PIN code. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="state" class="form-label">State</label>
            </div>
            <div class="col-sm-7">
                <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" id="state" value="{{ old('state') }}" required>
                <div class="invalid-feedback">
                    @error('state') {{ $message }} @else Please enter state. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label for="nationality" class="form-label">Nationality</label>
            </div>
            <div class="col-sm-5">
                <input type="text" name="nationality" class="form-control @error('nationality') is-invalid @enderror" id="nationality" value="{{ old('nationality') }}" required>
                <div class="invalid-feedback">
                    @error('nationality') {{ $message }} @else Please enter nationality. @enderror
                </div>
            </div>
            <div class="col-sm-1">
                <label for="religion" class="form-label">Religion</label>
            </div>
            <div class="col-sm-5">
                <input type="text" name="religion" class="form-control @error('religion') is-invalid @enderror" id="religion" value="{{ old('religion') }}" required>
                <div class="invalid-feedback">
                    @error('religion') {{ $message }} @else Please enter religion. @enderror
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-1">
                <label class="form-label">Cast</label>
            </div>
            <div class="col-sm-5">
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('cast') is-invalid @enderror" type="radio" name="cast" id="gen" value="Gen" {{ old('cast') == 'Gen' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="gen">Gen</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('cast') is-invalid @enderror" type="radio" name="cast" id="sc" value="Sc" {{ old('cast') == 'Sc' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="sc">Sc</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('cast') is-invalid @enderror" type="radio" name="cast" id="st" value="St" {{ old('cast') == 'St' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="st">St</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('cast') is-invalid @enderror" type="radio" name="cast" id="obc" value="Obc" {{ old('cast') == 'Obc' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="obc">Obc</label>
                    <span class="invalid-feedback">
                        @error('cast') {{ $message }} @else Please select your cast. @enderror
                    </span>
                </div>
                
            </div>
            <div class="col-sm-1">
                <label class="form-label">Gender</label>
            </div>
            <div class="col-sm-5">
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="female">Female</label>
                    <div class="invalid-feedback">
                        @error('gender') {{ $message }} @else Please select gender. @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-3">
                <label for="Institute" class="form-label">Name of Present Institute</label>
            </div>
            <div class="col-sm-9">
                <input type="text" name="Institute" class="form-control @error('Institute') is-invalid @enderror" id="Institute" value="{{ old('Institute') }}" required>
                <div class="invalid-feedback">
                    @error('Institute') {{ $message }} @else Please enter your current institute. @enderror
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="exam" class="form-label">Last Exam Pass</label>
            </div>
            <div class="col-sm-6">
                <input type="text" name="exam" class="form-control @error('exam') is-invalid @enderror" id="exam" value="{{ old('exam') }}" required>
                <div class="invalid-feedback">
                    @error('exam') {{ $message }} @else Please enter last exam passed. @enderror
                </div>
            </div>
            <div class="col-sm-2">
                <label for="grade" class="form-label">Percentage / Grade</label>
            </div>
            <div class="col-sm-2">
                <input type="text" name="grade" class="form-control @error('grade') is-invalid @enderror" id="grade" value="{{ old('grade') }}" required>
                <div class="invalid-feedback">
                    @error('grade') {{ $message }} @else Please enter grade/%. @enderror
                </div>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-1">
                <label for="signature" class="form-label">Signature</label>
            </div>
            <div class="col-sm-5">
                <input type="file" name="signature" class="form-control @error('signature') is-invalid @enderror" id="signature" accept="image/*" required>
                <div class="invalid-feedback">
                    @error('signature') {{ $message }} @else Please upload your signature. @enderror
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <img src="" alt="" id="signature-preview" class="img-thumbnail" style="visibility:hidden; max-height: 150px;">
            </div>
            <div class="col-sm-1">
                <label for="student_image" class="form-label">Image</label>
            </div>
            <div class="col-sm-5">
                <input type="file" name="student_image" class="form-control @error('student_image') is-invalid @enderror" id="student_image" accept="image/*" required>
                <div class="invalid-feedback">
                    @error('student_image') {{ $message }} @else Please upload your photo. @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <img src="" alt="" id="student-image-preview" class="img-thumbnail" style="visibility:hidden; max-height: 150px;">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
@endsection