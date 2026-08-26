@extends('layouts.admin')
@section('title', 'Manage News')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h5>News Articles</h5>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Add Article</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead><tr><th>Title</th><th>Category</th><th>Published</th><th>Date</th><th>Actions</th></tr></thead>
            <tbody>
            @forelse($news as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category }}</td>
                    <td>{!! $article->is_published ? '<span class="badge bg-success">Yes</span>' : '<span class="badge bg-secondary">Draft</span>' !!}</td>
                    <td>{{ $article->published_at?->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $article) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.news.destroy', $article) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">No news found.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
