@extends('Admin.layout')
@section('header', 'Admin Teacher Management')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sl No.</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Active</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $key => $teacher)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->gender }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->mobile }}</td>
                    <td>{{ $teacher->departments->department_name }}</td>
                    <td>@if ($teacher->is_active)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger text-dark">Inactive</span>
                    @endif</td>
                    <td>
                        @if ($teacher->is_active)
                        <a href="{{ route('admin.toggle_teacher_status',$teacher->id) }}" class="btn btn-sm btn-danger">Inactive</a>
                    @else
                        <a href="{{ route('admin.toggle_teacher_status',$teacher->id) }}" class="btn btn-sm btn-success">Active</a>
                    @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection