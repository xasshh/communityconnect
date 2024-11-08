<style>
    /* General container styling */
    .container {
        margin-top: 30px;
    }
    
    /* Card styling */
    .card {
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    /* Card header styling */
    .card-header {
        background-color: green;
        color: white;
        padding: 15px;
        font-size: 1.2em;
        border-bottom: 1px solid #e0e0e0;
    }
    
    /* Thread title and author styling */
    .card-header h2, .card-header h4 {
        margin: 0;
    }
    .card-header small {
        font-size: 0.9em;
    }
    
    /* Card body styling */
    .card-body p {
        font-size: 1em;
        color: #333;
        line-height: 1.5;
    }
    
    /* Replies section styling */
    .media {
        border-bottom: 1px solid #e0e0e0;
        padding-bottom: 15px;
        margin-bottom: 15px;
    }
    
    /* Reply author name */
    .media-body h5 {
        font-size: 1.1em;
        font-weight: bold;
        margin-bottom: 5px;
        color: black;
    }
    
    /* Timestamp styling */
    .media-body small {
        font-size: 0.85em;
        color: black;
    }
    
    /* Reply form styling */
    textarea.form-control {
        border-radius: 5px;
        resize: none;
    }
    
    .btn-primary {
        background-color: green;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
    }
    
    .btn-primary:hover {
        background-color: green;
    }
    
    /* No replies text */
    .card-body p {
        font-style: italic;
        color: black;
       
    }
    
    /* Spacing for reply section */
    .form-group {
        margin-top: 15px;
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