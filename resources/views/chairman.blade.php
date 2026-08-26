@extends('layouts.public')
@section('title', 'Chairman\'s Message - Leadership Commission')
@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4" style="font-weight: 800;">MESSAGE FROM CHAIRMAN</h2>
        @if($chairman)
        <div class="row">
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ $chairman->photo_url }}" alt="{{ $chairman->name }}" class="img-fluid rounded-circle mb-3" style="max-width: 250px;">
                <h4>{{ $chairman->name }}</h4>
                <p class="text-muted">{{ $chairman->title }}</p>
                @if($chairman->email)
                <p><a href="mailto:{{ $chairman->email }}"><i class="fas fa-envelope me-1"></i>{{ $chairman->email }}</a></p>
                @endif
            </div>
            <div class="col-lg-8">
                <div class="card p-4">
                    {!! $settings['chairman_message'] ?? '<p>Message coming soon.</p>' !!}
                </div>
            </div>
        </div>
        @else
        <p>Chairman information coming soon.</p>
        @endif
    </div>
</section>
@endsection
