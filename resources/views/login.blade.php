<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>UPortfolio | Login</title>
</head>

<body>
    <div class="container">
        <div class="left-side">
            <h2>UPortfolio</h2>
            <h1>Selamat Datang!</h1>
            <div class="user-input">
                <div class="input">
                    <p>Username</p>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input">
                    <p>Password</p>
                    <input type="password" placeholder="Password">
                </div>
                <div class="btn-login">
                    <button>Login</button>
                </div>
                <a href="#">Forgot your password?</a>
            </div>
            <div class="back-home">
                <span class="material-symbols-outlined">keyboard_backspace</span>
                <a href="{{ route('guest.home') }}">Back to Home</a>
            </div>
        </div>
        <div class="right-side">

        </div>
    </div>
</body>

</html>