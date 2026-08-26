@extends('layouts.public')
@section('title', $page->title . ' - Leadership Commission')
@section('content')
<section class="py-5">
    <div class="container">
        @if($page->slug === 'commission-matters')
        <h2 class="mb-4" style="font-weight: 800;">{{ strtoupper($page->title) }}</h2>
        @else
        <h2 class="mb-4" style="font-weight: 800;">{{ $page->title }}</h2>
        @endif
        <div class="card p-4">
            {!! $page->content !!}
        </div>
    </div>
</section>
@endsection
