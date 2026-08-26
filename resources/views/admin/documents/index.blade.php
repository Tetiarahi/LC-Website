@extends('layouts.admin')
@section('title', 'Manage Documents')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h5>Documents</h5>
    <a href="{{ route('admin.documents.create') }}" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Upload Document</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead><tr><th>Title</th><th>Category</th><th>File</th><th>Actions</th></tr></thead>
            <tbody>
            @forelse($documents as $doc)
                <tr>
                    <td>{{ $doc->title }}</td>
                    <td>{{ $doc->category }}</td>
                    <td><a href="{{ Storage::url($doc->file_path) }}" target="_blank"><i class="fas fa-download me-1"></i>Download</a></td>
                    <td>
                        <form method="POST" action="{{ route('admin.documents.destroy', $doc) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">No documents found.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
