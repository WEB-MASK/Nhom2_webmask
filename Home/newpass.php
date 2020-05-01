<?php 
include("pass_logic.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpass</title>
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
                                <p class="lead">Password Reset</p>
                            </div>
                            <?php include('messages.php'); ?>
                            <form action="newpass.php" class="form-login" method="post">
                              
                                <div class="form-group">
                                   <!-- <label >New Pass</label> -->
                                    <input type="password" name="newpass" class="form-control"  value="" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                   <!-- <label >New Pass</label> -->
                                    <input type="password" name="newpassc" class="form-control"  value="" placeholder="Confirm Password">
                                </div>
                                
                                <button type="submit" name="passet">Submit</button>
                                
                            </form>        
                          <!-- <div style = "font-size:13px; color:#cc0000; margin-top:10px"></div> -->

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