@extends('layouts.public')
@section('title', 'The Leadership Commission')

@section('hero')
<section class="hero-slider" id="heroSlider">
    @foreach($sliders as $i => $slider)
    <div class="hero-slide {{ $i === 0 ? 'active' : '' }}" style="background-image: url('{{ $slider->image_url }}')">
        <div class="hero-overlay">
            @if($slider->title)
            <div class="hero-content">
                <h2>{{ $slider->title }}</h2>
            </div>
            @endif
        </div>
    </div>
    @endforeach
</section>
@endsection

@section('content')
<section class="section-blue" style="background: rgba(32,42,169,.18); padding: 60px 0; color: #000;">
    <div class="container text-center">
        <h2 style="color: var(--lc-blue); font-weight: 800;">{{ $settings['strategic_plan_text'] ?? 'LC STRATEGIC PLAN (2026-2029) LAUNCHING' }}</h2>
    </div>
</section>

<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2 style="font-weight: 800;">The Leadership Commission of Kiribati</h2>
                <p class="lead">{{ strip_tags($settings['about_description'] ?? '') }}</p>
                <a href="{{ route('page', 'overview-of-the-lc') }}" class="btn btn-outline-dark-custom mt-3">About the LC</a>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('images/pages/about-bg.png') }}" alt="LC" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<section style="background: #191a6e; color: #fff; padding: 60px 0;">
    <div class="container text-center">
        <i class="fas fa-eye icon-large" style="color: #fff; font-size: 65px;"></i>
        <h2 class="mt-3 mb-4" style="font-weight: 800;">WE HAVE ONE VISION,<br>KIRIBATI TO BE A CORRUPTION FREE NATION BY 2036</h2>
        <p style="max-width: 800px; margin: 0 auto; font-size: 1.1rem;">{{ $settings['vision'] ?? '' }}</p>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <i class="fas fa-bullseye icon-large"></i>
        <h2 class="mt-3 mb-4" style="font-weight: 700;">OUR MISSION</h2>
        <p style="max-width: 800px; margin: 0 auto; font-size: 1.05rem;">{{ $settings['mission'] ?? '' }}</p>
    </div>
</section>

<section style="background: #590101; color: #fff; padding: 50px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3>Report Corruption</h3>
                <p>Any person aged 18 years and above may lodge a complaint with the Leadership Commission.</p>
                <a href="{{ route('report-corruption') }}" class="btn btn-danger mt-2">Reporting Corrupt Conduct</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/pages/report-corruption.png') }}" alt="Report Corruption" class="img-fluid rounded" style="max-height: 300px;">
            </div>
        </div>
    </div>
</section>

<section class="section-gray">
    <div class="container">
        <h3 class="mb-4" style="font-weight: 700;">LATEST NEWS & MEDIA</h3>
        <div class="row g-4">
            @forelse($latestNews as $article)
            <div class="col-md-4">
                <div class="card news-card h-100">
                    @if($article->image)
                    <img src="{{ $article->image_url }}" class="card-img-top" alt="{{ $article->title }}" style="height:200px;object-fit:cover;">
                    @endif
                    <div class="card-body">
                        <small class="text-muted">{{ $article->published_at->format('d M Y') }}</small>
                        <h5 class="card-title mt-2">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->excerpt ?? strip_tags($article->content), 120) }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center text-muted">No news articles yet.</div>
            @endforelse
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    if (slides.length <= 1) return;
    let current = 0;
    setInterval(() => {
        slides[current].classList.remove('active');
        current = (current + 1) % slides.length;
        slides[current].classList.add('active');
    }, 5000);
});
</script>
@endsection
