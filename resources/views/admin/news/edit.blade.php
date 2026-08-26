@extends('layouts.admin')
@section('title', 'Edit News Article')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.news.update', $news) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3"><label>Title *</label><input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required></div>
        <div class="mb-3"><label>Slug</label><input type="text" name="slug" class="form-control" value="{{ old('slug', $news->slug) }}"></div>
        <div class="mb-3"><label>Category</label><input type="text" name="category" class="form-control" value="{{ old('category', $news->category) }}"></div>
        <div class="mb-3"><label>Author</label><input type="text" name="author" class="form-control" value="{{ old('author', $news->author) }}"></div>
        <div class="mb-3"><label>Excerpt</label><textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt', $news->excerpt) }}</textarea></div>
        <div class="mb-3"><label>Content *</label><textarea name="content" class="form-control" rows="8">{{ old('content', $news->content) }}</textarea></div>
        @if($news->image)
            <div class="mb-3"><label>Current Image</label><br><img src="{{ Storage::url($news->image) }}" width="150" style="border-radius:4px;"></div>
        @endif
        <div class="mb-3"><label>New Image</label><input type="file" name="image" class="form-control" accept="image/*"></div>
        <div class="mb-3"><label>Published Date</label><input type="date" name="published_at" class="form-control" value="{{ old('published_at', $news->published_at?->format('Y-m-d')) }}"></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_published" class="form-check-input" {{ $news->is_published ? 'checked' : '' }}><label class="form-check-label">Published</label></div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
