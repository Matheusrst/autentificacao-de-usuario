<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <div>
            <label for="gender">gander:</label>
            <input type="text" id="gender" name="gender" required>
        </div>
        <div>
            <label for="phone">phone:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="cep">cep:</label>
            <input type="text" id="cep" name="cep" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div>
            <label for="number">number:</label>
            <input type="text" id="number" name="number" required>
        </div>
        <div>
            <label for="neighborhood">neighborhood:</label>
            <input type="text" id="neighborhood" name="neighborhood" required>
        </div>
        <div>
            <label for="city">city:</label>
            <input type="text" id="city" name="city" required>
        </div>
        <div>
            <label for="state">state:</label>
            <input type="text" id="state" name="state" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
