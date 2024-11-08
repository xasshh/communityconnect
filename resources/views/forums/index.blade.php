<!-- resources/views/forums/index.blade.php -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


<style>
    /* Custom CSS for the Forum Page */

/* General Container Styles */
.container {
    max-width: 1140px;
    margin: 0 auto;
}

/* Forum Title Styles */
.text-center h2 {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #343a40;
}

/* Card Styles */
.card {
    border: 5px solid #ddd;
    border-radius: 1.25rem; /* Bootstrap default rounded class */
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.3);
    transition: box-shadow 0.3s ease-in-out;
    padding-bottom: 3rem;
}

.card-header {
    background-color: green;
    color: #fff;
    font-size: 1.25rem;
    justify-content: center;
    padding: 20px;
    border-radius: 1rem;
    text-align: center;
    
}

.card-header a {
    color: #fff;
    text-decoration: none;

}

.card-header a:hover {
    text-decoration: underline;
}

.card-body {
    padding: 1.25rem;
}

.card-footer {
    background-color: #f8f9fa;
    padding: 0.75rem;
}

.card-body .card-text {
    color: black;
}

/* Sidebar Styles */
.card-sidebar {
    border: 1px solid #ddd;
    border-radius: 0.375rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
}

.card-sidebar .card-header {
    background-color: #343a40;
    color: #fff;
}

.card-sidebar .list-group-item {
    border: none;
    padding: 0.75rem 1.25rem;
}

.card-sidebar .list-group-item a {
    color: black;
    text-decoration: none;
}

.card-sidebar .list-group-item a:hover {
    text-decoration: underline;
}

.list-group-item i {
    margin-right: 0.5rem;
}

/* Alerts */
.alert-info {
    background-color: #e9ecef;
    color: #495057;
    border: 1px solid #d6d6d6;
    border-radius: 0.375rem;
}

/* Responsive Adjustments */
@media (max-width: 767.98px) {
    .card {
        margin-bottom: 1rem;
    }
}
.forum-container {
    display: flex;
    justify-content: center;
}

.forum-title {
    text-align: center;
}
.btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
}
.btn-primary{
    
    border: none;
    text-decoration: none;
}
</style>



    <div class="container py-8">
        <div class="row">
            <!-- Sidebar -->
         
            <!-- Main Content (Forum Grid) -->
            <div class="col-md-8 forum-container">
    <!-- Forum Title and Description -->
    <div class="forum-title">
        <h2 class="font-bold text-3xl text-dark">FORUMS</h2>
    </div>
</div>



                @if($forums->isEmpty())
                    <div class="alert alert-info" role="alert">
                        No forums available yet. Check back soon!
                    </div>
                @else
                    <!-- Forum Grid -->
                    <div class="row">
                        @foreach($forums as $forum)
                            <div class="col-lg-6 mb-4">
                                <div class="card h-100">
                                    <!-- Forum Header -->
                                    <div class="card-header bg-dark text-white">
                                        <a href="{{ route('forums.show', $forum->id) }}" class="text-white font-weight-bold">
                                            <strong>{{ $forum->title }}</strong>
                                        </a>
                                    </div>

                                    <!-- Forum Body -->
                                    <div class="card-body">
                                        <!-- Forum Description -->
                                        <p class="card-text text-muted">
                                            {{ Str::limit($forum->description, 100) }}
                                        </p>

                                        <!-- Created By -->
                                        <div class="mb-2">
                                            <small class="text-muted">Created by 
                                                <span class="font-weight-bold text-primary">{{ $forum->name }}</span>
                                            </small>
                                        </div>

                                        <!-- Forum Stats -->
                                      
                                    <!-- Forum Footer -->
                                    <div class="card-footer text-right">
                                        <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-primary ">
                                            Enter Forum
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

