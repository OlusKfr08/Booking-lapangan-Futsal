<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Booking List</title>
</head>

<body>
    <h2>Booking List</h2>

    <p><a href="{{ route('booking.create') }}">+ Add New Booking</a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($booking as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->user->username ?? $b->user->email }}</td>
                <td>{{ $b->date }}</td>
                <td>{{ $b->start_time }} - {{ $b->end_time }}</td>
                <td>{{ ucfirst($b->status) }}</td>
                <td>
                    <a href="{{ route('booking.edit', $b->id) }}">Edit</a> |
                    <form action="{{ route('booking.destroy', $b->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete this booking?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" align="center">No booking yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>