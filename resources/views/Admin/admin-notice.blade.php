@extends('Admin.layout')

@section('header', 'Notice Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Notice Management</h2>
    <a href="{{ route('admin.notice.create') }}" class="btn btn-primary">Add New Notice</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h5>All Notices</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Notice Name</th>
                        <th>Notice Date</th>
                        <th>PDF</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($notices as $notice)
                        <tr>
                            <td>{{ $notice->id }}</td>
                            <td>{{ $notice->notice_name }}</td>
                            <td>{{ $notice->notice_date }}</td>
                            <td>
                                @if($notice->notice_pdf)
                                    <a href="{{ Storage::url($notice->notice_pdf) }}" target="_blank" class="btn btn-sm btn-info">View PDF</a>
                                @else
                                    No PDF
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.notice.edit', $notice->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('admin.notice.delete', $notice->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this notice?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No notices found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
