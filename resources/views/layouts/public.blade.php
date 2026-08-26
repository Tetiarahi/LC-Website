<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Leadership Commission')</title>
    <meta name="description" content="{{ $meta_description ?? 'Serving People with Respect and Integrity' }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Open Sans', sans-serif; }
        :root { --lc-blue: #191a6e; --lc-dark-blue: #202aa9; --lc-red: #590101; }
        .navbar-lc { background: #d5d7de; padding: 10px 0; }
        .navbar-lc .navbar-brand img { max-height: 60px; }
        .navbar-lc .nav-link { color: #333; font-weight: 600; padding: 8px 16px; font-size: .95rem; }
        .navbar-lc .nav-link:hover, .navbar-lc .nav-link.active { color: var(--lc-blue); }
        .navbar-lc .dropdown-menu { border: none; box-shadow: 0 4px 12px rgba(0,0,0,.15); }
        .hero-slider { position: relative; overflow: hidden; height: 80vh; min-height: 500px; }
        .hero-slide { position: absolute; inset: 0; background-size: cover; background-position: center; transition: opacity .8s; }
        .hero-slide.active { opacity: 1; z-index: 1; }
        .hero-slide:not(.active) { opacity: 0; }
        .hero-overlay { position: absolute; inset: 0; background: rgba(25,26,110,.35); display: flex; align-items: center; justify-content: center; }
        .hero-content { color: #fff; text-align: center; }
        .section-blue { background: var(--lc-blue); color: #fff; padding: 50px 0; }
        .section-red { background: var(--lc-red); color: #fff; padding: 50px 0; }
        .section-gray { background: #f7f7f7; padding: 50px 0; }
        .icon-large { font-size: 65px; color: var(--lc-dark-blue); transition: color .3s; }
        .icon-large:hover { color: #ff0000; }
        .footer { background: #111; color: #aaa; padding: 40px 0 20px; }
        .footer h6 { color: #fff; margin-bottom: 20px; }
        .footer a { color: #ccc; text-decoration: none; }
        .footer a:hover { color: #fff; }
        .btn-lc { background: var(--lc-dark-blue); color: #fff; border: none; padding: 12px 30px; border-radius: 4px; }
        .btn-lc:hover { background: #0037DD; color: #fff; }
        .btn-outline-dark-custom { border: 1px solid #151414; color: #000; background: transparent; padding: 12px 30px; border-radius: 4px; transition: .3s; }
        .btn-outline-dark-custom:hover { background: var(--lc-dark-blue); color: #fff; border-color: var(--lc-dark-blue); }
        .news-card { border: none; box-shadow: 0 2px 8px rgba(0,0,0,.1); transition: transform .2s; }
        .news-card:hover { transform: translateY(-3px); }
        .about-section { background: url('/images/pages/about-bg.png') no-repeat center; background-size: cover; }
    </style>
    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-lc sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Leadership Commission"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Chairman's Message</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('chairman') }}">Chairman's Message</a></li>
                            <li><a class="dropdown-item" href="{{ route('commissioners') }}">Commissioners</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Commission Matters</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('page', 'commission-matters') }}">SOI Guide & Manual</a></li>
                            <li><a class="dropdown-item" href="{{ route('page', 'commission-matters') }}">SOI Form Online</a></li>
                            <li><a class="dropdown-item" href="{{ route('page', 'commission-matters') }}">Resources</a></li>
                            <li><a class="dropdown-item" href="{{ route('page', 'commission-matters') }}">Publications</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('report-corruption') ? 'active' : '' }}" href="{{ route('report-corruption') }}">Report Corruption</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">About the LC</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('page', 'overview-of-the-lc') }}">Overview of the LC</a></li>
                            <li><a class="dropdown-item" href="{{ route('page', 'commission-matters') }}">Former Commissioners</a></li>
                            <li><a class="dropdown-item" href="{{ route('org-structure') }}">Organizational Structure</a></li>
                            <li><a class="dropdown-item" href="{{ route('news') }}">News & Media</a></li>
                            <li><a class="dropdown-item" href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('hero')

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h6>Main Menu</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('chairman') }}">Chairman's Message</a></li>
                        <li><a href="{{ route('commissioners') }}">Commissioners</a></li>
                        <li><a href="{{ route('report-corruption') }}">Report Corruption</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6>Contact Us</h6>
                    <p><i class="fas fa-phone me-2"></i>{{ $contact->phone ?? '75022372' }} / {{ $contact->phone2 ?? '75022373' }}</p>
                    <p><i class="fas fa-envelope me-2"></i><a href="mailto:{{ $contact->email ?? 'reportcorruption@lc.org.ki' }}">{{ $contact->email ?? 'reportcorruption@lc.org.ki' }}</a></p>
                    <p><i class="fas fa-clock me-2"></i>{{ $contact->office_hours ?? 'Mon-Fri 9:00am - 5:15pm' }}</p>
                </div>
                <div class="col-md-4">
                    <h6>Follow Us</h6>
                    <a href="{{ $contact->facebook_url ?? '#' }}" target="_blank" class="me-3"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center">
                <p class="mb-0">{{ $footer_text ?? '© 2026 Leadership Commission. All Rights Reserved. Designed By LC IT' }}</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
