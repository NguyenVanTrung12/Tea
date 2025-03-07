<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Logon admin</title>
    <link rel="icon" href="https://c1.klipartz.com/pngpicture/80/60/sticker-png-earth-logo-world-world-war-i-globe-world-map-circle.png" type="image/gif" sizes="25x25">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="/css/logon.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h2 class="logo">Logo</h2>
    </header>
    <div class="container-fluid">
        <div class="col-6">
            <img src="http://www.dxhcbz.com/cas/themes/anumbrella/images/left-img.jpg" alt="Image">
        </div>
        <div class="wrapper col-6">
            <div class="form-box login">
                <h2>Login</h2>

            <form action="" method="POST" role="form">
                @csrf
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="email" >
                    <label for="">Email</label>
                    @error('email')<small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-open"></ion-icon></span>
                    <input type="password" name="password">
                    <label for="">Password</label>
                    @error('password')<small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <a href="{{ route('register')}}">đăng ký</a>
            </form>

        </div>
    </div>
</div>
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
