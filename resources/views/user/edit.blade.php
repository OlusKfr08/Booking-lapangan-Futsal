<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>

<body>
    <h2>Edit User</h2>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" value="{{ $user->name }}" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username" value="{{ $user->username }}" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" value="{{ $user->email }}" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td><label for="password">New Password</label></td>
                <td><input type="password" name="password" id="password" style="min-width: 275px;" placeholder="Biarkan kosong jika tidak ingin mengubah password"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Update</button></td>
            </tr>
        </table>
    </form>

    <p><a href="{{ route('user.index') }}">← Back to User List</a></p>
</body>

</html>