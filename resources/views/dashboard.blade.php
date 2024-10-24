<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .chart-container {
            height: 300px;
        }
        .table-responsive {
            min-height: 350px;
        }
        .badge {
            font-size: 14px;
            padding: 2px 8px;
        }
        .btn-primary {
            background-color: green;
           
        }
     /* Sidebar styles */
.sidebar {
    height: 100vh; /* Full height */
    position: fixed; /* Stick to the side */
    top: 0;
    left: 0;
    z-index: 100; /* Ensure the sidebar is on top */
    padding-top: 20px; /* Space from top */
    background-color: #f8f9fa; /* Light background */
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
}

.sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 20px); /* Make the sidebar full height */
    padding-top: 20px;
    overflow-x: hidden; /* Hide horizontal scrollbar */
    overflow-y: auto; /* Enable scrolling for long sidebars */
}

.nav-link {
    font-size: 18px; /* Larger font for better readability */
    color: #333; /* Darker text color */
    padding: 10px 15px;
    margin-bottom: 5px;
    border-radius: 4px;
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

.nav-link:hover {
    background-color: #007bff; /* Change background color on hover */
    color: #fff; /* White text on hover */
}

.nav-link i {
    margin-right: 10px; /* Add spacing between icon and text */
}

.nav-pills .nav-item + .nav-item {
    margin-top: 10px; /* Space between menu items */
}

/* Logout button style */
form .x-dropdown-link {
    font-size: 18px;
    color: #dc3545; /* Red for the logout button */
    padding: 10px 15px;
    border-radius: 4px;
    display: inline-block;
    transition: background-color 0.3s ease;
}

form .x-dropdown-link:hover {
    background-color: #dc3545;
    color: #fff;
}

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">
                            <i class="fas fa-home"></i> HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">
                            <i class="fas fa-user"></i> PROFILE
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Your other content goes here -->
    </div>
</div>


            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="dashboard-container">
                @if(Auth::user()->profile && Auth::user()->profile->profile_pic)
                <img src="{{ asset('storage/' . Auth::user()->profile->profile_pic) }}" class="img-fluid rounded-circle" alt="Profile Picture" style="width: 100px; height: 100px;">
            @else
                <img src="path/to/default/profile/picture.png" class="img-fluid rounded-circle" alt="Default Profile Picture" style="width: 100px; height: 100px;">
            @endif
        </div>
        <!-- User Name -->
        <h1 class="h3 mb-3">Welcome, {{ Auth::user()->name }}!</h1>
                   
                    <p>Email: {{ Auth::user()->email }}</p>

                    <!-- Overview Card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Overview</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $totalEvents }}</h3>
                                            <p>Total Events</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-calendar-outline"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>{{ $userCount }}</h3>
                                            <p>Active Users</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-stalker"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">YOUR RSVPs</h5>
                        </div>
                        <div class="card-body">
                        @if($reservations->isEmpty())
                        <p>You haven't made any RSVPs yet.</p>
                    @else
                        <ul class="list-unstyled">
                            @foreach($reservations as $reservation)
                                <li>
                                    <strong>{{ ucfirst(str_replace('-', ' ', $reservation->space)) }}</strong>
                                    on {{ \Carbon\Carbon::parse($reservation->date)->format('F j, Y') }}
                                    <div class="mt-2">
                                        <form action="{{ route('rsvp.cancel', $reservation->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger">Cancel</button>
                                        </form>
                                        <a href="{{ route('rsvp.Edit', $reservation->id) }}" class="text-link">Edit</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">YOUR JOINED EVENTS</h5>
                        </div>
                        <div class="card-body">
                        
                    @if($joinedEvents->isEmpty())
                        <p>You haven't joined any events yet.</p>
                    @else
                        <ol class="list-unstyled">
                            @foreach($joinedEvents as $event)
                                <li><strong>Event Name: {{ $event->title }}</strong></li>
                            @endforeach
                        </ol>
                    @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">YOUR CREATED EVENTS</h5>
                        </div>
                        <div class="card-body">
                      
                    @forelse($createdEvents as $event)
                        <div class="card">
                            <div class="card-header"><h6>{{ $event->title }}</h6></div>
                            <div class="card-body">
                                <h6>Joined Users:</h6>
                                @if($event->users->isEmpty())
                                    <p>No users have joined this event yet.</p>
                                @else
                                    <ul>
                                        @foreach($event->users as $user)
                                            <li>{{ $user->name }} ({{ $user->email }})</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p>You haven't created any events yet.</p>
                    @endforelse
                        </div>
                    </div>

                    <!-- Recent Activities Card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">NEW MESSAGES</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                    @if(Auth::user()->unreadNotifications->count())
                        <ul class="list-unstyled">
                            @foreach(Auth::user()->unreadNotifications as $notification)
                                <li>
                                    <strong>{{ $notification->data['sender_name'] }}</strong>: "{{ $notification->data['message'] }}"
                                    <form action="{{ route('notifications.delete', $notification->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn text-danger">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No new messages.</p>
                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions Card -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Quick Actions</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('events.index') }}" class="btn btn-primary btn-lg">CREATE EVENT</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('messages.index') }}" class="btn btn-secondary btn-lg">SEND MESSAGE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Chart initialization
            var ctx = document.getElementById("myChart").getContext('2d');
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May"],
                    datasets: [{
                        label: "Total Users",
                        data: [100, 120, 140, 160, 180],
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });
    </script>
</body>
</html>
