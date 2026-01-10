@extends('Admin.layout')

@section('header', 'Create Notice')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>Create New Notice</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.notice.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="notice_name" class="form-label">Notice Name</label>
                        <input type="text" class="form-control @error('notice_name') is-invalid @enderror" id="notice_name" name="notice_name" value="{{ old('notice_name') }}" required>
                        @error('notice_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="notice_pdf" class="form-label">Notice PDF</label>
                        <input type="file" class="form-control @error('notice_pdf') is-invalid @enderror" id="notice_pdf" name="notice_pdf" accept=".pdf">
                        @error('notice_pdf')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <small class="form-text text-muted">Upload a PDF file (optional, max 10MB).</small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.notice') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Notice</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
