<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('CSS/register.css') }}">
    <title>Register Page</title>
</head>
<body>
    <div class="register">
        <h3>Register</h3>
    </div>

    <form action="/register" method="POST">
        @csrf
        <label for="nama_lengkap">Fullname</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}">
        @error('nama_lengkap')
            <p>{{$message}}</p>
        @enderror
    
        <label for="Phone">Phone Number</label>
        <input type="text" name="Phone" id="Phone" value="{{ old('Phone') }}">
        @error('Phone')
            <p>{{$message}}</p>
        @enderror
    
        <label for="Email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <p>{{$message}}</p>
        @enderror
    
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        @error('password')
            <p>{{$message}}</p>
        @enderror
    
        <button type="submit">Register</button>
        <p>Already have an account? <a href="/">Login</a></p>
    </form>
    
</body>
</html>