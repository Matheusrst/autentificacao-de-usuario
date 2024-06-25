<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>CPF: {{ $user->cpf }}</p>
    <p>Age: {{ $user->age }}</p>
    <p>gender: {{ $user->gender }}</p>
    <p>phone: {{ $user->phone }}</p>
    <p>CEP: {{ $user->cep }}</p>
    <p>Address: {{ $user->address }}</p>
    <p>number: {{ $user->number }}</p>
    <p>neighborhood: {{ $user->neighborhood }}</p>
    <p>city: {{ $user->city }}</p>
    <p>state: {{ $user->state }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
