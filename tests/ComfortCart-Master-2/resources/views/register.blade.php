<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/register.css') }}">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Poppins&display=swap" rel="stylesheet">

    <!-- ICON -->
    <script src="https://kit.fontawesome.com/841fe3b1a2.js" crossorigin="anonymous"></script>
</head>
<body>

    <img src="images/vector.png" alt="" class="back">
    
    <form action="/register" method="POST" >
        @csrf
        <div class="main">
            <div class="container">
                <img src="images/Union.png" alt="Union.png">
                <h1>Register</h1>
                <h2>Create an account in a second, just like snapping your finger!</h2>
            </div>
            
            <div class="container-input">
                    <div class="inputs">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name"value="{{ old('name') }}">
                        
                        <p id="error-name" class="error-message"></p>
                        @error('name')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="inputs">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}">
                        
                        <p id="error-email" class="error-message"></p>
                        @error('email')
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="inputs">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" value="{{ old('address') }}">
                        
                        <p id="error-address" class="error-message"></p>
                        @error('address')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="inputs">
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
                        
                        <p id="error-num" class="error-message"></p>
                        @error('phone')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="inputs">
                        <label for="Day_of_Birth">Day of Birth</label>
                        <input type="date" id="Day_of_Birth" name="Day_of_Birth" value="{{ old('Day_of_Birth') }}">
                        
                        <p id="error-birth" class="error-message"></p>
                        @error('Day_of_Birth')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    
                    <div class="inputs">
                        <label for="password">Your Password</label>
                        
                        <div class="hide">
                            <input type="password" id="password" name="password">
                            <div id="show-pass"  class="show"></div>
                        </div>
                        
                        <p id="error-pass" class="error-message"></p>
                        @error('password')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="input-button">
                    <!-- BUTTON -->
                    <button type="submit" id="button">Register</button>
                </div>
                <h1>You already have an account? <a href="login">Login here</a></h1>
            </div>
            
        </form>
            <img src="images/vector2.png" alt="" class="back2">
        <script src="{{ asset('/register.js') }}"></script>
</body>
</html>