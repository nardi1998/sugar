<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{url('public/Login')}}/css/nunito-font.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/Login')}}/images/lambang.png">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{url('public/Login')}}/css/style.css"/>
</head>
<body class="form">
    <div class="page-content" style="width: 1340px; height: 800px;">
        <div class="form-v6-content">
            <div class="form-left" style="margin-top: 50px;">
                <img src="{{url('public/Login')}}/images/lambang.png" alt="form">
            </div>
            <form class="form-detail" action="{{url('login')}}" method="post">
                @csrf
                <h2>Halaman Login</h2>
                <div class="form-row">
                    <input type="email" name="email" placeholder="Masukkan Email">
                        @if ($errors->has('email'))
                        <p style="color: black;">Harap Isi Email Dengan Benar</p>
                        @endif
                        <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                </div>
               <br><br>
                <div class="form-row">
                    <input type="password" name="password" placeholder="Masukkan Password">
                        @if ($errors->has('password'))
                        <p style="color: black;">Harap Isi Password Dengan Benar</p>
                        @endif
                        <i class="fa fa-lock login-user"></i>
                </div>
                <div class="form-row">
               <br>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>