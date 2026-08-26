@extends('layouts.admin')
@section('title', 'Add Page')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.pages.store') }}">
        @csrf
        <div class="mb-3"><label>Title *</label><input type="text" name="title" class="form-control" value="{{ old('title') }}" required></div>
        <div class="mb-3"><label>Slug (auto-generated if empty)</label><input type="text" name="slug" class="form-control" value="{{ old('slug') }}"></div>
        <div class="mb-3"><label>Meta Description</label><input type="text" name="meta_description" class="form-control" value="{{ old('meta_description') }}"></div>
        <div class="mb-3"><label>Content</label><textarea name="content" class="form-control" rows="10">{{ old('content') }}</textarea></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_published" class="form-check-input" checked><label class="form-check-label">Published</label></div>
        <button class="btn btn-primary">Save</button>
        <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
