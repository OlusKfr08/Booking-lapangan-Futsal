<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create User</title>
</head>

<body>
    <h2>Create New User</h2>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" id="name" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password" style="min-width: 275px;" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Create</button></td>
            </tr>
        </table>
    </form>

    <p><a href="{{ route('user.index') }}">← Back to User List</a></p>
</body>

</html>