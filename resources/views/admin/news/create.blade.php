@extends('layouts.admin')
@section('title', 'Add News Article')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.news.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Title *</label><input type="text" name="title" class="form-control" value="{{ old('title') }}" required></div>
        <div class="mb-3"><label>Slug (auto-generated if empty)</label><input type="text" name="slug" class="form-control" value="{{ old('slug') }}"></div>
        <div class="mb-3"><label>Category</label><input type="text" name="category" class="form-control" value="{{ old('category', 'News & Media') }}"></div>
        <div class="mb-3"><label>Author</label><input type="text" name="author" class="form-control" value="{{ old('author', 'Administrator') }}"></div>
        <div class="mb-3"><label>Excerpt</label><textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt') }}</textarea></div>
        <div class="mb-3"><label>Content *</label><textarea name="content" class="form-control" rows="8">{{ old('content') }}</textarea></div>
        <div class="mb-3"><label>Image</label><input type="file" name="image" class="form-control" accept="image/*"></div>
        <div class="mb-3"><label>Published Date</label><input type="date" name="published_at" class="form-control" value="{{ old('published_at', date('Y-m-d')) }}"></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_published" class="form-check-input" checked><label class="form-check-label">Published</label></div>
        <button class="btn btn-primary">Save</button>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
