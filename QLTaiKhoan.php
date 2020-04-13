<?php
require_once("php/ss.php");
include("./php/echoHTML.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="./css/bt.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./linearicons/style.css">
    <script src="./js/style.js"></script>
    <script src="./js/fontawesome.min.js"></script>
    
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/navbar.js"></script>
    
</head>

<body>
    <!-- nav -->
    <?php
    addNav();
    ?>
    <!-- end nav -->
    <!-- sidebar -->
    <?php
    addSidebar();
    ?>
    <!--End sidebar -->
    <!-- user -->
    <?php
    addUser();
    ?>
    <!-- main -->
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel">
                    <div class="panel-head">
                        <h3 class="home-page">
                            Quản Lý Tài Khoản
                        </h3>
                    </div>
                    <div class="panel-body">
                    <form class="frm" id = "frm-tcd">
                        <div class="row">
                          <div class="col">
                            <div class="label">Họ</div>
                            <div class="value"><input type="text" name="ho"  size="15" maxlenght = "12" required></div>
                          </div>
                          <div class="col">
                            <div class="label">Tên</div>
                            <div class="value"><input type="text" name="ten"  size="12" maxlenght = "12" required></div>
                          </div>
                          <div class="col">
                            <div class="label">Email/Tên tài khoản</div>
                            <div class="value"><input type="text" name="user" size="20"required></div>
                          </div>					
                          <div class="col">
                            <div class="label">Mật Khẩu</div>
                            <div class="value"><input type="text" name="pass" size="20" required></div>
                          </div>
                          <div class="col">
                            <div class="label">Quyền Truy cập</div>
                            <div class="value">
                                <select name="kihoc" id="kihoc">
                                  <option value="Admin">Admin</option>
                                  <option value="NhanVien">Nhân Viên</option>						
                                </select>
                            </div>
                        </div>			
                        <div class="btn-n">
                            <button id = "tracuudiem" type="button" class="click">Thêm</button>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- end panl -->
            </div>
        </div>
    </div>
    
</body>

</html>
<!-- Nhớ z-index -1 thì k thao tác  được
 -->