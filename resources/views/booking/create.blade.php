<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Booking</title>
</head>

<body>
    <h2>Create Booking</h2>

    <form method="POST" action="{{ route('booking.store') }}">
        @csrf
        <table cellpadding="5">
            <tr>
                <td>User</td>
                <td>
                    <select name="user_id" style="min-width: 275px;" required>
                        <option value="">-- Select User --</option>
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->username ?? $user->email }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td>Start Time</td>
                <td><input type="time" name="start_time" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td>End Time</td>
                <td><input type="time" name="end_time" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Save Booking</button></td>
            </tr>
        </table>
    </form>

    <p><a href="{{ route('booking.index') }}">← Back to Booking List</a></p>

</body>

</html>