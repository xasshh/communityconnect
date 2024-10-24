<style>
  body {
    font-family: 'Helvetica Neue', Arial, sans-serif;
    background-color: #f4f7fa;
    color: #333;
}

.container {
    margin-top: 30px;
}

.card {
    border: none;
    border-radius: 8px;
    background-color: #ffffff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.card-header {
    background-color: green;
    color: white;
    padding: 15px 20px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.card-header h2 {
    margin: 0;
    font-size: 1.75rem;
}

.card-body {
    padding: 20px;
}

.media {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    border-bottom: 1px solid #e9ecef;
    padding-bottom: 15px;
}

.media img {
    margin-right: 15px;
    border-radius: 50%;
    border: 2px solid #007bff;
}

.media-body {
    flex: 1;
}

.media h5 {
    margin: 0;
    font-size: 1.25rem;
    color: #343a40;
}

.media p {
    margin: 5px 0;
    font-size: 1rem;
    line-height: 1.5;
}

.text-muted {
    font-size: 0.875rem;
    color: #6c757d;
}

.btn {
    background-color: green;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

.form-group {
    margin-bottom: 15px;
}

textarea {
    border: 1px solid #ced4da;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    resize: none;
    transition: border-color 0.3s;
}

textarea:focus {
    border-color: #007bff;
    outline: none;
}

a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s;
}

a:hover {
    text-decoration: underline;
    color: #0056b3;
}

.mb-4 {
    margin-bottom: 1.5rem !important;
}

.alert {
    padding: 15px;
    border-radius: 5px;
    margin-top: 20px;
}

.alert-info {
    background-color: #d1ecf1;
    color: #0c5460;
}

.alert-warning {
    background-color: #ffeeba;
    color: #856404;
}


</style>
<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Thread Title and Details -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h2>{{ $thread->title }}</h2>
                        <small>Posted by: <strong>{{ $thread->user->name }}</strong> on {{ $thread->created_at->format('F j, Y, g:i a') }}</small>
                    </div>
                    <div class="card-body">
                        <p>{{ $thread->content }}</p>
                    </div>
                </div>

                <!-- Replies Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Replies</h4>
                    </div>
                    <div class="card-body">
                        @if($thread->replies->count())
                            @foreach($thread->replies as $reply)
                                <div class="media mb-3">
                                    <div class="media-body">
                                        <h5 class="mt-0">{{ $reply->user->name }}</h5>
                                        <p>{{ $reply->content }}</p>
                                        <small class="text-muted">{{ $reply->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No replies yet. Be the first to reply!</p>
                        @endif
                    </div>
                </div>

                <!-- Reply Form -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Post a Reply</h4>
                    </div>
                    <div class="card-body">
                        @auth
                            <form action="{{ route('replies.store', $thread->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <textarea name="content" class="form-control" rows="5" placeholder="Write your reply..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Reply</button>
                            </form>
                        @else
                            <p>You need to <a href="{{ route('login') }}">log in</a> to post a reply.</p>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>