<?php
session_start();
require_once("php/ss-admin.php");
include("./php/echoHTML.php");
require_once("./php/header_sp.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Sản Phẩm</title>
    <link rel="stylesheet" href="./css/bt.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./linearicons/style.css">
    <script src="./js/style.js"></script>
    <script src="./js/fontawesome.min.js"></script>
    
    <script src="./js/jquery-3.4.1.js"></script>
    <script src="./js/navbar.js"></script>
    <script src="./js/xuly.js"></script>
    
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
                            Quản Lý Sản Phẩm
                        </h3>
                    </div>
                    <div class="panel-body">
                    <form class="frm" id = "frm-sp">
                        <div class="row">
                          <div class="col">
                            <div class="label">ID</div>
                            <div class="value"><input type="text" name="id"  size="15" maxlenght = "22" required></div>
                          </div>
                          <div class="col">
                            <div class="label">Tên Sản Phẩm</div>
                            <div class="value"><input type="text" name="ten"  size="12" maxlenght = "22" required></div>
                          </div>
                          <div class="col">
                            <div class="label">Xuất Xứ</div>
                            <div class="value"><input type="text" name="xs"  size="12" maxlenght = "22" required></div>
                          </div>
                          <div class="col">
                            <div class="label">Giá (VNĐ)</div>
                            <div class="value"><input type="text" name="gia" size="22"required></div>
                          </div>					
                          <div class="col">
                            <div class="label">Số Lượng</div>
                            <div class="value"><input type="int" name="sl" size="3" required></div>
                          </div>
                          <div class="col">
                            <div class="label">Nhà Cung Cấp</div>
                            <div class="value">
                                <select name="idncc" id="idncc">
                                      <?php
                                      echo idncc();
                                      ?>					
                                </select>
                            </div>
                        </div>			
                        <div class="btn-n">
                            <button id = "themsp" type="button" class="click">Thêm</button>
                        </div>
                        
                    </form>
                    
                    </div>
                    <div class="thongbao"></div>
                    <div class="bangdulieu">
                    <div class="">
                        <div class="">Nhà Cung Cấp</div>
                        <div class="">
                            <select name="show-ncc" id="show-ncc">
                            <option value="">Hiển Thị Tất Cả</option>
                                <?php
                                echo showncc();
                                ?>
                            </select>
                        </div>
                    </div>
                    <table class="table-data" id ="tb-sp" bgcolor="#FFFFFF">
                    <?php
                    echo hienthi();
                    ?>
                    
                </table>
                </div>
                <!-- end panl -->
                
            </div>
        </div>
    </div>
    <div id="formEdit">
    <form class="frm" id = "frm-edit"><div class=""><div class="">
        <div class="idsp-en"></div>
        <div class="idsp">ID</div><input type="text" name="id" class="idsp" value ="" size="12" maxlenght = "22" required></div></div><div class=""><div class="">Tên Sản Phẩm</div><div class="">
        <input type="text" name="ten" class="ten" value ="" size="12" maxlenght = "22" required></div></div><div class=""><div class="">Xuất Xứ</div><div class="">
            <input type="text" name="xs"  class="xs"  value ="" size="12" maxlenght = "22" required></div></div><div class=""><div class="">Giá (VNĐ)</div><div class="">
                <input type="text" name="gia"  class="gia"  value ="" size="22"required></div></div>					<div class=""><div class="">Số Lượng</div><div class="">
                    <input type="int" name="sl" class ="sl" value ="" size="3" required></div></div><div class=""><div class="">Nhà Cung Cấp</div>
                    <div class=""><select name="idncc" class="idncc"><?php echo idncc();?></select></div></div>	<div class="btn-n row bt_edit">
                    <button id = "editSP" type="button" class="click">Sửa</button>
                    <button id = "huyEdit" type="button" class="click">Hủy</button></div></form>
                
    </div>
</body>

</html>
<!-- Nhớ z-index -1 thì k thao tác  được
 -->