@extends('Admin.layout')

@section('header', 'Edit Notice')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>Edit Notice</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.notice.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="notice_name" class="form-label">Notice Name</label>
                        <input type="text" class="form-control @error('notice_name') is-invalid @enderror" id="notice_name" name="notice_name" value="{{ old('notice_name', $notice->notice_name) }}" required>
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
                        <small class="form-text text-muted">
                            Upload a new PDF file to replace the current one (optional).
                            @if($notice->notice_pdf)
                                Current file: <a href="{{ Storage::url($notice->notice_pdf) }}" target="_blank">{{ basename($notice->notice_pdf) }}</a>
                            @endif
                        </small>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.notice') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Notice</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
