@extends('Admin.layout')
@section('header', 'Admin Student Management')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="table caption-top">
        <caption>List of students</caption>
        <thead>
            <tr>
                <th scope="col">Sl No.</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Father Name</th>
                <th scope="col">Mother Name</th>
                <th scope="col">DOB</th>
                <th scope="col">Cast</th>
                <th scope="col">Mobile No</th>
                <th scope="col">Email Id</th>
                <th scope="col">Applied For</th>
                <th scope="col">Present Institute</th>
                <th scope="col">Address</th>
                <th scope="col">Roll No</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>
                        {{-- @if($user->photo) --}}
                            <img src="{{ asset('storage/' . $user->student_image) }}" alt="Student Photo" width="50" height="50" loading="lazy">
                        {{-- @else
                            <span>No Image</span>
                        @endif --}}
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->father_name }}</td>
                    <td>{{ $user->mother_name }}</td>
                    <td>{{ $user->DOB }}</td>
                    <td>{{ $user->cast }}</td>
                    <td>{{ $user->contact }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->cources->cource_name }}</td>
                    <td>{{ $user->Institute }}</td>
                    <td><b>Post:</b> {{$user->post}}. <br><b>PS:</b> {{$user->ps}}. <br><b>District:</b> {{$user->district }}</td>
                    <td>@if ($user->roll_no != null)
                        {{ $user->roll_no }}
                    @else
                        Not Set
                    @endif</td>
                    <td>
                        <a href="{{ route('admin.view_student',$user->id) }}" class="btn btn-sm btn-primary">View</a>
                        @if ($user->roll_no == null)
                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#rollNoModal" data-user-id="{{ $user->id }}">Add Roll No</button>
                        @endif
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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