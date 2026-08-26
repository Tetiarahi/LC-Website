@extends('layouts.admin')
@section('title', 'Manage Pages')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h5>Pages</h5>
    <a href="{{ route('admin.pages.create') }}" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Add Page</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead><tr><th>Title</th><th>Slug</th><th>Published</th><th>Actions</th></tr></thead>
            <tbody>
            @forelse($pages as $page)
                <tr>
                    <td>{{ $page->title }}</td>
                    <td><code>{{ $page->slug }}</code></td>
                    <td>{!! $page->is_published ? '<span class="badge bg-success">Yes</span>' : '<span class="badge bg-secondary">Draft</span>' !!}</td>
                    <td>
                        <a href="{{ route('admin.pages.edit', $page) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.pages.destroy', $page) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">No pages found.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
