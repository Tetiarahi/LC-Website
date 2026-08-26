@extends('layouts.admin')
@section('title', 'Manage Sliders')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h5>Sliders</h5>
    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Add Slider</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead><tr><th>Image</th><th>Title</th><th>Order</th><th>Active</th><th>Actions</th></tr></thead>
            <tbody>
            @forelse($sliders as $slider)
                <tr>
                    <td><img src="{{ Storage::url($slider->image) }}" width="100" height="60" style="object-fit:cover;border-radius:4px;"></td>
                    <td>{{ $slider->title ?? '-' }}</td>
                    <td>{{ $slider->sort_order }}</td>
                    <td>{!! $slider->is_active ? '<span class="badge bg-success">Yes</span>' : '<span class="badge bg-secondary">No</span>' !!}</td>
                    <td>
                        <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.sliders.destroy', $slider) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">No sliders found.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
