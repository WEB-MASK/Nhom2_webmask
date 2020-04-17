<?php
session_start();
require_once("php/ss.php");
include("./php/echoHTML.php");
function idncc(){
    $dbcon = mysqli_connect("localhost","root","","test"); //connect
    mysqli_set_charset($dbcon, 'utf8');
    if(!$dbcon)
    {
        echo'
        <script>
            function abc(){
                if(confirm("Lỗi dữ liệu") == true){
                    window.location="../login.php";
                }else{
                    window.location="../login.php";
                }
            }
            abc();
        </script>
        ';
        
    }
    else
    {
        $output2 ="";
        $query = "SELECT `idNCC`, `TenNCC` FROM `nhacungcap` WHERE 1";
        $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
        while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
        {
            $output2 .= '<option value="' .$row[0]. '">' .$row[1]. '</option>';
        }
        //dong kn
        mysqli_close($dbcon);
        return $output2;
    }  
}
function hienthi()
    {
    $dbcon = mysqli_connect("localhost","root","","test"); //connect
    mysqli_set_charset($dbcon, 'utf8');
    if(!$dbcon)
    {
        echo'
        <script>
            function abc(){
                if(confirm("Lỗi dữ liệu") == true){
                    window.location="../login.php";
                }else{
                    window.location="../login.php";
                }
            }
            abc();
        </script>
        ';

    }
    else
    {
        $output ="";
        $query = "SELECT `IDKhauTrang`, `TenKhauTrang`, `idNCC`, `NUOCSX`, `Gia`, `SoLuong` FROM `khautrang` WHERE 1";
        $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
        while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
        {
            $output .= '<tr><td>' .$row[0]. '</td><td>' .$row[1]. '</td><td>' .$row[4]. '</td><td>' .$row[5]. '</td><td>' .$row[2]. '</td><td>' .$row[3]. '</td><td><a href="./php/delete-sp.php?id='.$row[0].'">Xóa</a></td><td><a href="./php/sua-sp.php?id='.$row[0].'">Sửa</a></td></tr>';
        }
        //dong kn
        mysqli_close($dbcon);
        return $output;
    }
    }
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
                    <form class="frm" id = "frm-newtk">
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
                    <table class="table-data" bgcolor="#FFFFFF">
                      <tr id ="tb-khoa" class="row-first">                     
                          <td width="100">ID</td>
                          <td width="300">Tên Sản Phẩm</td>
                          <td width="150">Giá</td>
                          <td width="100">Số Lượng</td>
                          <td width="200">Nhà Cung Cấp</td>
                          <td width="100">Nước Sản Xuất</td>
                          <td></td>
                          <td></td>
                      </tr>
                    <?php
                    echo hienthi();
                    ?>
                    
                </table>
                </div>
                <!-- end panl -->
            </div>
        </div>
    </div>
</body>

</html>
<!-- Nhớ z-index -1 thì k thao tác  được
 -->