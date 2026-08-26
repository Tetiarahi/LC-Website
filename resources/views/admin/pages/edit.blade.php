@extends('layouts.admin')
@section('title', 'Edit Page')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.pages.update', $page) }}">
        @csrf @method('PUT')
        <div class="mb-3"><label>Title *</label><input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}" required></div>
        <div class="mb-3"><label>Slug</label><input type="text" name="slug" class="form-control" value="{{ old('slug', $page->slug) }}"></div>
        <div class="mb-3"><label>Meta Description</label><input type="text" name="meta_description" class="form-control" value="{{ old('meta_description', $page->meta_description) }}"></div>
        <div class="mb-3"><label>Content</label><textarea name="content" class="form-control" rows="10">{{ old('content', $page->content) }}</textarea></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_published" class="form-check-input" {{ $page->is_published ? 'checked' : '' }}><label class="form-check-label">Published</label></div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
