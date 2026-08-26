@extends('layouts.public')
@section('title', 'Contact - Leadership Commission')
@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4" style="font-weight: 800;">Contact the Leadership Commission</h2>
        <p class="lead">Get in touch with the Leadership Commission of Kiribati for general enquiries, complaints, appointments, or assistance with our services.</p>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="mb-3">Our Location</h4>
                    <p><i class="fas fa-building me-2"></i><strong>Office:</strong> Leadership Commission of Kiribati</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i><strong>Location:</strong> {{ $contact->address }}</p>
                    <p><i class="fas fa-envelope-open me-2"></i><strong>P.O Box:</strong> {{ $contact->pobox }}</p>
                    <p><i class="fas fa-phone me-2"></i><strong>Phone:</strong> {{ $contact->phone }} / {{ $contact->phone2 }}</p>
                    <p><i class="fas fa-envelope me-2"></i><strong>Email:</strong> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                    <p><i class="fas fa-clock me-2"></i><strong>Office Hours:</strong> {{ $contact->office_hours }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4">
                    <h4 class="mb-3">General Enquiries</h4>
                    <form>
                        <div class="mb-3"><label>Name</label><input type="text" class="form-control" placeholder="Your Name"></div>
                        <div class="mb-3"><label>Email</label><input type="email" class="form-control" placeholder="Your Email"></div>
                        <div class="mb-3"><label>Subject</label><input type="text" class="form-control" placeholder="Subject"></div>
                        <div class="mb-3"><label>Message</label><textarea class="form-control" rows="4" placeholder="Your Message"></textarea></div>
                        <button type="submit" class="btn btn-lc">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
