@extends('layouts.admin')
@section('title', 'Upload Document')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.documents.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Title *</label><input type="text" name="title" class="form-control" value="{{ old('title') }}" required></div>
        <div class="mb-3"><label>Category</label><input type="text" name="category" class="form-control" value="{{ old('category', 'general') }}"></div>
        <div class="mb-3"><label>File *</label><input type="file" name="file" class="form-control" required></div>
        <div class="mb-3"><label>Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}"></div>
        <button class="btn btn-primary">Upload</button>
        <a href="{{ route('admin.documents.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
