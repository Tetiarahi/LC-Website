@extends('layouts.admin')
@section('title', 'Edit Slider')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.sliders.update', $slider) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3"><label>Title</label><input type="text" name="title" class="form-control" value="{{ old('title', $slider->title) }}"></div>
        <div class="mb-3"><label>Subtitle</label><input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $slider->subtitle) }}"></div>
        <div class="mb-3"><label>Current Image</label><br><img src="{{ Storage::url($slider->image) }}" width="150" style="border-radius:4px;"></div>
        <div class="mb-3"><label>New Image</label><input type="file" name="image" class="form-control" accept="image/*"></div>
        <div class="mb-3"><label>Link</label><input type="url" name="link" class="form-control" value="{{ old('link', $slider->link) }}"></div>
        <div class="mb-3"><label>Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $slider->sort_order) }}"></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_active" class="form-check-input" {{ $slider->is_active ? 'checked' : '' }}><label class="form-check-label">Active</label></div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
