@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Message from </h1>
    <p></p>

    <h3>Replies:</h3>
    @if (message->replies->isEmpty())
        <p>No replies yet.</p>
    @else
        <ul>
            @foreach (message->replies as $reply)
                <li>
                    <strong>{{ reply->sender->name }}:</strong> {{ reply->message }}
                    <br>
                    <small>Sent at: {{ $reply->created_at }}</small>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Reply Form -->
    <form action="{{ route('messages.reply', $message->id) }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="reply">Your Reply:</label>
            <textarea name="message" id="reply" rows="3" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Reply</button>
    </form>
</div>
@endsection
