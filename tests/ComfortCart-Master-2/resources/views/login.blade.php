<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins&display=swap" rel="stylesheet">

    <!-- ICON -->
    <script src="https://kit.fontawesome.com/841fe3b1a2.js" crossorigin="anonymous"></script>
</head>
<body>
    <img src="images/vector.png" alt="" class="back">
    <form action="/login" method = "POST">
    @csrf
    
    <div class="main">
        <div class="container">
            <img src="images/Union.png" alt="Union.png">
            <h1>Login</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>


        <div class="container-input">
                <div class="inputs">
                    <label for="nama">Email</label>
                    <input type="text" id="email" name="email">
                    
                    <p class="error-message" id="error-email"></p>
                    @error('email')
                        <p>{{$message}}</p>
                    @enderror
                </div>

                <div class="inputs">
                    <label for="nama">Your Password</label>

                    <div class="hide">
                        <input type="password" id="password" name="password">
                        <div id="show-pass"  class="show"></div>
                    </div>
                </div>
            
        </div>

        <div class="input-button">
            <!-- BUTTON -->
            <button type="submit" id="button">Login</button>

            <h1>You don’t have an account? <a href="register">Register here</a></h1>
        </div>
        </form>
    </div>

    <img src="images/vector2.png" alt="" class="back2">
    
    <script src="{{ asset('/login.js') }}"></script>
</body>
</html>