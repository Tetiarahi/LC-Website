@extends('layouts.admin')
@section('title', 'Edit Commissioner')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.commissioners.update', $commissioner) }}" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3"><label>Name *</label><input type="text" name="name" class="form-control" value="{{ old('name', $commissioner->name) }}" required></div>
        <div class="mb-3"><label>Title *</label><input type="text" name="title" class="form-control" value="{{ old('title', $commissioner->title) }}" required></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" value="{{ old('email', $commissioner->email) }}"></div>
        <div class="mb-3"><label>Current Photo</label><br><img src="{{ $commissioner->photo_url }}" width="100" height="100" style="object-fit:cover;border-radius:50%;"></div>
        <div class="mb-3"><label>New Photo</label><input type="file" name="photo" class="form-control" accept="image/*"></div>
        <div class="mb-3"><label>Bio</label><textarea name="bio" class="form-control" rows="3">{{ old('bio', $commissioner->bio) }}</textarea></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_chairman" class="form-check-input" {{ $commissioner->is_chairman ? 'checked' : '' }}><label class="form-check-label">Chairman</label></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_former" class="form-check-input" {{ $commissioner->is_former ? 'checked' : '' }}><label class="form-check-label">Former Commissioner</label></div>
        <div class="mb-3"><label>Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $commissioner->sort_order) }}"></div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.commissioners.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
