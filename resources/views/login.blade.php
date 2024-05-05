<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
    <title>Login Page</title>
</head>
<body>

    <div class="login">
        <h3>Login</h3>
    </div>

    <form action="/login" method="POST">
        @csrf 
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
    
        <button type="submit">Login</button>
        <p>Don't have an account? <a href="/register">Register</a></p>
    </form>
    
</body>
</html>