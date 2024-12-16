<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1>Login App</h1>
    <form action="/add_accout" method="POST" id="registerForm">
        <h2>Register</h2>
        <input type="text" id="regUsername" placeholder="Username" required>
        <input type="password" id="regPassword" placeholder="Password" required>
        <button type="submit">Register</button>
        @csrf
    </form>

    <form action="/check_login" method="POST" id="loginForm">
        <h2>Login</h2>
        <input type="email" name="email" id="loginUsername" placeholder="Email" required>
        <input type="password" name="password" id="loginPassword" placeholder="Password" required>
        <button type="submit">Login</button>
        @csrf
    </form>
    <script src="app.js"></script>
    
</body>
</html>
