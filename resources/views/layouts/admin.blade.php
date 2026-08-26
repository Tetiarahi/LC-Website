<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - Leadership Commission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; }
        .sidebar { min-height: 100vh; background: #1a1a6e; width: 250px; position: fixed; }
        .sidebar a { color: rgba(255,255,255,.8); padding: 12px 20px; display: block; text-decoration: none; transition: .2s; }
        .sidebar a:hover, .sidebar a.active { background: rgba(255,255,255,.1); color: #fff; }
        .sidebar .brand { padding: 20px; color: #fff; font-weight: 700; font-size: 1.1rem; border-bottom: 1px solid rgba(255,255,255,.1); }
        .main-content { margin-left: 250px; padding: 20px 30px; }
        .topbar { background: #fff; padding: 15px 30px; margin: -20px -30px 20px; box-shadow: 0 2px 4px rgba(0,0,0,.08); display: flex; justify-content: space-between; align-items: center; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="brand"><i class="fas fa-shield-alt me-2"></i>LC Admin</div>
        <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
        <a href="{{ route('admin.sliders.index') }}" class="{{ request()->routeIs('admin.sliders.*') ? 'active' : '' }}"><i class="fas fa-images me-2"></i>Sliders</a>
        <a href="{{ route('admin.commissioners.index') }}" class="{{ request()->routeIs('admin.commissioners.*') ? 'active' : '' }}"><i class="fas fa-users me-2"></i>Commissioners</a>
        <a href="{{ route('admin.news.index') }}" class="{{ request()->routeIs('admin.news.*') ? 'active' : '' }}"><i class="fas fa-newspaper me-2"></i>News</a>
        <a href="{{ route('admin.pages.index') }}" class="{{ request()->routeIs('admin.pages.*') ? 'active' : '' }}"><i class="fas fa-file-alt me-2"></i>Pages</a>
        <a href="{{ route('admin.documents.index') }}" class="{{ request()->routeIs('admin.documents.*') ? 'active' : '' }}"><i class="fas fa-folder-open me-2"></i>Documents</a>
        <a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}"><i class="fas fa-cog me-2"></i>Settings</a>
        <a href="{{ route('home') }}" target="_blank"><i class="fas fa-external-link-alt me-2"></i>View Site</a>
        <form method="POST" action="{{ route('logout') }}" style="padding:0 20px;">
            @csrf
            <button type="submit" class="btn btn-link text-start p-0" style="color:rgba(255,255,255,.8);text-decoration:none;"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
        </form>
    </div>
    <div class="main-content">
        <div class="topbar">
            <h5 class="mb-0">@yield('title', 'Dashboard')</h5>
            <span>{{ Auth::user()->name }}</span>
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">{{ session('success') }}<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
        @endif
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
