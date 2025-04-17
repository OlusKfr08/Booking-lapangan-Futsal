<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Booking</title>
</head>

<body>
    <h2>Edit Booking</h2>

    <form method="POST" action="{{ route('booking.update', $booking->id) }}">
        @csrf
        @method('PUT')
        <table cellpadding="5">
            <tr>
                <td>User</td>
                <td>
                    <select name="user_id" style="min-width: 275px;" required>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $booking->user_id ? 'selected' : '' }}>
                            {{ $user->username ?? $user->email }}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date" value="{{ $booking->date }}" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td>Start Time</td>
                <td><input type="time" name="start_time" value="{{ $booking->start_time }}" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td>End Time</td>
                <td><input type="time" name="end_time" value="{{ $booking->end_time }}" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                    <select name="status" style="min-width: 275px;" required>
                        @foreach (['pending', 'confirmed', 'canceled'] as $status)
                        <option value="{{ $status }}" {{ $booking->status === $status ? 'selected' : '' }}>
                            {{ ucfirst($status) }}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Update Booking</button></td>
            </tr>
        </table>
    </form>

    <p><a href="{{ route('booking.index') }}">← Back to Booking List</a></p>

</body>

</html>