@extends('layouts.admin')
@section('title', 'Site Settings')
@section('content')
<form method="POST" action="{{ route('admin.settings.update') }}">
    @csrf @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="card p-4 mb-4">
                <h6 class="mb-3">General Settings</h6>
                <div class="mb-3"><label>Site Name</label><input type="text" name="site_name" class="form-control" value="{{ $site['site_name'] ?? '' }}"></div>
                <div class="mb-3"><label>Tagline</label><input type="text" name="site_tagline" class="form-control" value="{{ $site['site_tagline'] ?? '' }}"></div>
                <div class="mb-3"><label>Footer Text</label><input type="text" name="footer_text" class="form-control" value="{{ $site['footer_text'] ?? '' }}"></div>
            </div>
            <div class="card p-4 mb-4">
                <h6 class="mb-3">Contact Information</h6>
                <div class="mb-3"><label>Phone</label><input type="text" name="phone" class="form-control" value="{{ $contact->phone }}"></div>
                <div class="mb-3"><label>Phone 2</label><input type="text" name="phone2" class="form-control" value="{{ $contact->phone2 }}"></div>
                <div class="mb-3"><label>Toll Free</label><input type="text" name="toll_free" class="form-control" value="{{ $contact->toll_free }}"></div>
                <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" value="{{ $contact->email }}"></div>
                <div class="mb-3"><label>Address</label><input type="text" name="address" class="form-control" value="{{ $contact->address }}"></div>
                <div class="mb-3"><label>P.O Box</label><input type="text" name="pobox" class="form-control" value="{{ $contact->pobox }}"></div>
                <div class="mb-3"><label>Office Hours</label><input type="text" name="office_hours" class="form-control" value="{{ $contact->office_hours }}"></div>
                <div class="mb-3"><label>Facebook URL</label><input type="url" name="facebook_url" class="form-control" value="{{ $contact->facebook_url }}"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-4 mb-4">
                <h6 class="mb-3">Content Settings</h6>
                <div class="mb-3"><label>Vision</label><textarea name="vision" class="form-control" rows="3">{{ $site['vision'] ?? '' }}</textarea></div>
                <div class="mb-3"><label>Mission</label><textarea name="mission" class="form-control" rows="4">{{ $site['mission'] ?? '' }}</textarea></div>
                <div class="mb-3"><label>Strategic Plan Text</label><input type="text" name="strategic_plan_text" class="form-control" value="{{ $site['strategic_plan_text'] ?? '' }}"></div>
                <div class="mb-3"><label>About Description</label><textarea name="about_description" class="form-control" rows="5">{{ $site['about_description'] ?? '' }}</textarea></div>
                <div class="mb-3"><label>Chairman Message (HTML)</label><textarea name="chairman_message" class="form-control" rows="10">{{ $site['chairman_message'] ?? '' }}</textarea></div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Save All Settings</button>
</form>
@endsection
