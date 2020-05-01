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
<div id="wrapper">

<div class="vertical-align-wrap">
    <div class="vertical-align-middle">
        <div class="auth-box forgot ">
            <div class="content">
              
                <div class="logo text-center"><img src="../img/covid.png" alt="NCovid Logo"></div>
                <p class="lead">Forgot Password</p>
                <?php include("messages.php"); ?>
                <form action="forgotPass.php" method="post">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email ...">
                        <span class="input-group-btn"><button type="submit" class="btn btn-primary" name="resetpass"><i class="fa fa-arrow-right"></i></button></span>
                    </div>
                </form>
                <div class="mt-3 text-center"><a class="text-muted" href="login.php">
                                <u>Sign in</u></a>
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