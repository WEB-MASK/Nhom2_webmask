<?php
session_start();  
session_destroy();
header('location:Home/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Cửa Hàng</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./linearicons/style.css">
    <link rel="stylesheet" href="./css/all.css">

</head>

<body>
<?php
if(isset($_GET["thongbao"]))
{
echo '<script> alert("Sai tên đăng nhập hoặc mật khẩu");</script>';

}
?>
    <div class="wrapper">
        <div class="vertiacl-middel">
            <div class="auth-box">
                <div class="left">
                    <div class="content">
                        <div class="head">
                            <div class="logo">
                                <img src="./img/covid.png" alt="">
                                <p class="lead">Login to your account</p>
                            </div>
                            <form action="./php/eventLogin.php" class="form-login" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" name ="user" id="signin-email" value="" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pass" id="signin-password" value="" placeholder="Password">
                                </div>
                                <div class="form-group remember">
                                    <label for="" class="elem-left">
                                        <input type="checkbox" name="" id="">
                                        <span>Remember</span>
                                    </label>
                                </div>
                                <button type="submit">LOGIN</button>
                                <div class="bottom">
                                    <span class="forgot">
                                        <i class="fa fa-lock"></i>
                                        <a href="#">Forgot password?</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="overplay">
                        <div class="content text">
                            <h1>Soft and skin-friendly</h1>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/all.js"></script>
</body>

</html>