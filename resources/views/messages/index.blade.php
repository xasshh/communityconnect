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
            <input type="text" id="recipient-search" class="form-control" placeholder="Search users..." required>
            <input type="hidden" name="recipient_id" id="recipient-id">

            <div id="search-results" class="mt-2 bg-white border rounded"></div>
        </div>
        
        <div class="form-group mb-3">
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#recipient-search').on('keyup', function () {
            let query = $(this).val();
            if (query.length > 2) {
                $.ajax({
                    url: "{{ route('messages.search') }}",
                    type: 'GET',
                    data: { query: query },
                    success: function (data) {
                        $('#search-results').empty();
                        data.forEach(user => {
                            $('#search-results').append(
                                `<div class="search-item" data-id="${user.id}">${user.name}</div>`
                            );
                        });
                    }
                });
            } else {
                $('#search-results').empty();
            }
        });

        // Click event to select a user from search results
        $(document).on('click', '.search-item', function () {
            let userId = $(this).data('id');
            let userName = $(this).text();
            $('#recipient-search').val(userName);
            $('#recipient-id').val(userId); // Set the hidden input with selected user's ID
            $('#search-results').empty();
        });
    });
</script>


@endsection