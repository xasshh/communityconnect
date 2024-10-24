@extends('community.layout')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">User Profile</h2>

    <!-- Display User Information -->
    <div class="card mb-4">
        <div class="card-header">
            <h4>{{ $user->name }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Member Since:</strong> {{ $user->created_at->format('F d, Y') }}</p>
            <!-- Additional user information can go here -->
        </div>
    </div>

    <!-- Display User's RSVP Events -->
    <h3 class="mb-3">Your RSVPs</h3>
    <div class="row">
        @if ($userEvents->isEmpty())
            <p>You haven't RSVP'd to any events yet.</p>
        @else
            @foreach ($userEvents as $event)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">Date: {{ $event->date }}</p>
                            <p class="card-text">Location: {{ $event->location }}</p>
                            <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary">View Event</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
