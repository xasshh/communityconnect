@extends('community.layout')

@section('content')
<div class="container">
    <h1>Send a Message</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('messages.send') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="recipient">Send To:</label>
            <select name="recipient_id" id="recipient" class="form-control" required>
                <option value="">Select a user</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>


@endsection