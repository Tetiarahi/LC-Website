@extends('layouts.public')
@section('title', 'News & Media - Leadership Commission')
@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4" style="font-weight: 800;">NEWS & MEDIA</h2>
        <div class="row g-4">
            @forelse($articles as $article)
            <div class="col-md-6">
                <div class="card news-card h-100">
                    @if($article->image)
                    <img src="{{ $article->image_url }}" class="card-img-top" alt="{{ $article->title }}" style="height:220px;object-fit:cover;">
                    @endif
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <small class="text-muted">{{ $article->published_at->format('d M Y') }}</small>
                            <small class="badge bg-primary">{{ $article->category }}</small>
                        </div>
                        <h4 class="card-title">{{ $article->title }}</h4>
                        <p class="card-text">{{ $article->excerpt ?? Str::limit(strip_tags($article->content), 200) }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">No articles found.</div>
            @endforelse
        </div>
    </div>
</section>
@endsection
