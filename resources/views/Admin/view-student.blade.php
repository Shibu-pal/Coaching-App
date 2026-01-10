@extends('Admin.layout')
@section('header', 'Student Details')
@section('content')
    <div class="mb-3">
        <a href="{{ route('admin.student') }}" class="btn btn-secondary">&larr; Back to List</a>
    </div>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Student Profile: {{ $student->name }}</h5>
        </div>
        <div class="row g-0">
            <div class="col-md-4 text-center p-3 bg-light d-flex align-items-center justify-content-center">
                @if($student->student_image)
                    <img src="{{ asset('storage/' . $student->student_image) }}" 
                         class="img-fluid rounded border shadow-sm" 
                         alt="Student Photo" 
                         style="max-height: 300px; width: auto;"
                         loading="lazy">
                @else
                    <div class="text-muted p-5 border rounded bg-white">
                        <i class="fas fa-user fa-3x mb-2"></i><br>No Image Available
                    </div>
                @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Full Name</div>
                        <div class="col-sm-8 fw-bold">{{ $student->name }}</div>
                    </div>
                    <hr class="my-1">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Roll No</div>
                        <div class="col-sm-8">
                            @if($student->roll_no)
                                <span class="badge bg-success">{{ $student->roll_no }}</span>
                            @else
                                <span class="badge bg-warning text-dark">Not Assigned</span>
                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#rollNoModal" data-user-id="{{ $student->id }}">Add Roll No</button>
                            @endif
                        </div>
                    </div>
                    <hr class="my-1">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Applied For</div>
                        <div class="col-sm-8">{{ $student->cources->cource_name ?? 'N/A' }}</div>
                    </div>
                    <hr class="my-1">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Father's Name</div>
                        <div class="col-sm-8">{{ $student->father_name }}</div>
                    </div>
                    <hr class="my-1">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Mother's Name</div>
                        <div class="col-sm-8">{{ $student->mother_name }}</div>
                    </div>
                    <hr class="my-1">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Date of Birth</div>
                        <div class="col-sm-8">{{ $student->DOB }}</div>
                    </div>
                    <hr class="my-1">
                    <div class="row mb-2">
                        <div class="col-sm-4 text-muted">Contact Info</div>
                        <div class="col-sm-8">
                            <i class="fas fa-phone-alt me-1"></i> {{ $student->contact }} <br>
                            <i class="fas fa-envelope me-1"></i> {{ $student->email }}
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- Modal -->
    <div class="modal fade" id="rollNoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('admin.update_roll_no') }}" method="POST">
                    @csrf <div class="modal-header">
                        <h5 class="modal-title">Assign Roll Number</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Assigning Roll No for: <strong><span id="studentNameDisplay"></span></strong></p>
                        <input type="hidden" name="user_id" id="modalUserId">
                        <div class="mb-3">
                            <label for="roll_no" class="form-label">Enter Roll No:</label>
                            <input type="text" class="form-control" name="roll_no" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection