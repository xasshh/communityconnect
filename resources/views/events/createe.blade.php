<div>
        <h2 class="text-center mb-4">Create AN Event</h2>
</div>

<form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="event_name">Event Name</label>
        <input type="text" name="title" class="form-control"  required>
    </div>
    <div class="form-group">
        <label for="event_name">Description</label>
        <input type="text" rows="5" name="description" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="event_name">Location</label>
        <textarea type="text" name="location" class="form-control"  required></textarea>
    </div>
    <div class="form-group">
    <label for="event_date">Event Date</label>
    <input type="date" name="date" class="form-control" required>
</div>


<div class="form-group">
    <label for="event_time">Event Time</label>
    <input type="time" name="time" class="form-control"  required>
</div>
    <div class="form-group">
        <label for="image">Event Image</label>
        <input type="file" name="image" class="form-control" id="image">
    </div>
    <button type="submit" class="btn btn-primary">Create Event</button>
</form>


<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-4">Create an Event</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="event_name" class="form-label">Event Name</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" required>
                </div>
                <div class="form-group mb-3">
    <label for="event_datetime" class="form-label">Event Date & Time</label>
    <input type="datetime-local" name="event_datetime" class="form-control" required>
</div>

                <div class="form-group mb-4">
                    <label for="image" class="form-label">Event Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>

                <button type="submit" class="btn btn-primary w-100">Create Event</button>
            </form>
        </div>
    </div>
</div>
