@extends('layouts.admin')
@section('title', 'Add Commissioner')
@section('content')
<div class="card p-4">
    <form method="POST" action="{{ route('admin.commissioners.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3"><label>Name *</label><input type="text" name="name" class="form-control" value="{{ old('name') }}" required></div>
        <div class="mb-3"><label>Title *</label><input type="text" name="title" class="form-control" value="{{ old('title') }}" required></div>
        <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" value="{{ old('email') }}"></div>
        <div class="mb-3"><label>Photo</label><input type="file" name="photo" class="form-control" accept="image/*"></div>
        <div class="mb-3"><label>Bio</label><textarea name="bio" class="form-control" rows="3">{{ old('bio') }}</textarea></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_chairman" class="form-check-input"><label class="form-check-label">Chairman</label></div>
        <div class="mb-3 form-check"><input type="checkbox" name="is_former" class="form-check-input"><label class="form-check-label">Former Commissioner</label></div>
        <div class="mb-3"><label>Sort Order</label><input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}"></div>
        <button class="btn btn-primary">Save</button>
        <a href="{{ route('admin.commissioners.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
