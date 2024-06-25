<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Registered Users</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>CEP</th>
                <th>Address</th>
                <th>Number</th>
                <th>Neighborhood</th>
                <th>City</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="{{ route('user.show', $user->id) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->cep }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->neighborhood }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->state }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <th>.</th>
    <form action="{{ route('register.form') }}" method="GET">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-danger" onclick=>adicionar usuario</button>
    </form>
</body>
</html>
