<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}">
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $user->cpf) }}">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ old('age', $user->age) }}">
        </div>
        <div>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" value="{{ old('gender', $user->gender) }}">
        </div>
        <div>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
        </div>
        <div>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" value="{{ old('cep', $user->cep) }}">
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{ old('address', $user->address) }}">
        </div>
        <div>
            <label for="number">Number:</label>
            <input type="text" id="number" name="number" value="{{ old('number', $user->number) }}">
        </div>
        <div>
            <label for="neighborhood">Neighborhood:</label>
            <input type="text" id="neighborhood" name="neighborhood" value="{{ old('neighborhood', $user->neighborhood) }}">
        </div>
        <div>
            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="{{ old('city', $user->city) }}">
        </div>
        <div>
            <label for="state">State:</label>
            <input type="text" id="state" name="state" value="{{ old('state', $user->state) }}">
        </div>
       
        <button type="submit">Update User</button>
    </form>
</body>
</html>
