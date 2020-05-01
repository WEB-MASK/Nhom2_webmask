<?php 
include("pass_logic.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../linearicons/style.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>
    <div class="wrapper">
        <div class="vertiacl-middel">
            <div class="auth-box">
                <div class="left">
                    <div class="content">
                        <div class="head">
                            <div class="logo">
                                <img src="../img/covid.png" alt="">
                                <p class="lead">Login to your account</p>
                            </div>
                            <?php include('messages.php'); ?>
                            <form action="" class="form-login" method="post">
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" name="email" class="form-control" id="signin-email" value="vuitrannb@gmail.com" placeholder="Email">
								</div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password">
                                </div>
                                <div class="form-group remember">
                                    <label for="" class="elem-left">
                                        <input type="checkbox" name="" id="">
                                        <span>Remember</span>
                                    </label>
                                </div>
                                <button type="submit" name="login">LOGIN</button>
                                <div class="bottom">
                                    <span class="forgot">
                                        <i class="fa fa-lock"></i>
                                        <a href="forgotPass.php">Forgot password?</a>
                                    </span>
                                </div>
                            </form>        
                          <!-- <div style = "font-size:13px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div> -->

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

  
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/all.js"></script>
</body>

</html>