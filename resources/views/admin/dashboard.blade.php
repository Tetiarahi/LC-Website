@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="row g-4">
    <div class="col-md-4"><div class="card text-center p-4"><h3>{{ $sliders }}</h3><p class="text-muted mb-0">Sliders</p></div></div>
    <div class="col-md-4"><div class="card text-center p-4"><h3>{{ $commissioners }}</h3><p class="text-muted mb-0">Commissioners</p></div></div>
    <div class="col-md-4"><div class="card text-center p-4"><h3>{{ $news }}</h3><p class="text-muted mb-0">News Articles</p></div></div>
    <div class="col-md-4"><div class="card text-center p-4"><h3>{{ $pages }}</h3><p class="text-muted mb-0">Pages</p></div></div>
    <div class="col-md-4"><div class="card text-center p-4"><h3>{{ $documents }}</h3><p class="text-muted mb-0">Documents</p></div></div>
</div>
@endsection
