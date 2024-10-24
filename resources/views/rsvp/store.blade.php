@extends('community.layout')

@section('content')
<div class="container mt-5">
    <h2>Reserve Your Space</h2>
    <p>Browse available spaces for rent in the community and make an RSVP to reserve your spot.</p>
    
    <!-- Available spaces for rent -->
    <div class="row">
        <!-- Example rental space 1 -->
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="/images/venue-1.jpg" class="card-img-top" alt="Community Hall">
                <div class="card-body">
                    <h5 class="card-title">Community Hall</h5>
                    <p class="card-text">A spacious hall perfect for weddings, parties, and community events.</p>
                    <p><strong>Capacity:</strong> 200 people</p>
                    <p><strong>Price:</strong> $500/day</p>
                    <!-- RSVP Button triggers a form or modal -->
                    <a href="{{ route('rsvp.create', ['space' => 'community-hall']) }}" class="btn btn-primary">RSVP Now</a>
                </div>
            </div>
        </div>

        <!-- Example rental space 2 -->
        <div class="col-md-6">
            <div class="card mb-4">
                <img src="/images/venue-2.jpg" class="card-img-top" alt="Conference Room">
                <div class="card-body">
                    <h5 class="card-title">Conference Room</h5>
                    <p class="card-text">A fully equipped room for business meetings, conferences, and workshops.</p>
                    <p><strong>Capacity:</strong> 50 people</p>
                    <p><strong>Price:</strong> $200/day</p>
                    <a href="{{ route('rsvp.create', ['space' => 'conference-room']) }}" class="btn btn-primary">RSVP Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
