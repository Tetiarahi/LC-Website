@extends('layouts.admin')
@section('title', 'Manage Commissioners')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h5>Commissioners</h5>
    <a href="{{ route('admin.commissioners.create') }}" class="btn btn-primary"><i class="fas fa-plus me-1"></i>Add Commissioner</a>
</div>
<div class="card">
    <div class="table-responsive">
        <table class="table mb-0">
            <thead><tr><th>Photo</th><th>Name</th><th>Title</th><th>Email</th><th>Chairman</th><th>Former</th><th>Actions</th></tr></thead>
            <tbody>
            @forelse($commissioners as $c)
                <tr>
                    <td><img src="{{ $c->photo_url }}" width="50" height="50" style="object-fit:cover;border-radius:50%;"></td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{!! $c->is_chairman ? '<span class="badge bg-warning text-dark">Yes</span>' : '-' !!}</td>
                    <td>{!! $c->is_former ? '<span class="badge bg-info">Yes</span>' : '-' !!}</td>
                    <td>
                        <a href="{{ route('admin.commissioners.edit', $c) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.commissioners.destroy', $c) }}" class="d-inline" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">No commissioners found.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
