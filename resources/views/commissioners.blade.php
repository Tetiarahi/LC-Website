@extends('layouts.public')
@section('title', 'Commissioners - Leadership Commission')
@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4" style="font-weight: 800;">COMMISSIONERS</h2>
        <div class="row g-4">
            @forelse($commissioners as $c)
            <div class="col-md-4 text-center">
                <div class="card p-4 h-100">
                    <img src="{{ $c->photo_url }}" alt="{{ $c->name }}" class="rounded-circle mx-auto mb-3" style="width:180px;height:180px;object-fit:cover;">
                    <h5>{{ $c->name }}</h5>
                    <p class="text-muted">{{ $c->title }}</p>
                    @if($c->email)
                    <p><a href="mailto:{{ $c->email }}"><i class="fas fa-envelope me-1"></i>{{ $c->email }}</a></p>
                    @endif
                    @if($c->bio)
                    <p>{{ $c->bio }}</p>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">No commissioners found.</div>
            @endforelse
        </div>
    </div>
</section>
@endsection
