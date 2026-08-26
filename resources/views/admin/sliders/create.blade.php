@extends('layouts.admin')
@section('title', 'Add Slider')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.sliders.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Title</label><input type="text" name="title" class="form-control" value="{{ old('title') }}"></div>
        <div class="mb-3"><label>Subtitle</label><input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}"></div>
        <div class="mb-3"><label>Image *</label><input type="file" name="image" class="form-control" required accept="image/*"></div>
        <div class="mb-3"><label>Link</label><input type="url" name="link" class="form-control" value="{{ old('link') }}"></div>
        <div class="mb-3"><label>Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}"></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_active" class="form-check-input" checked><label class="form-check-label">Active</label></div>
        <button class="btn btn-primary">Save</button>
        <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
