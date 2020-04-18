<?php
$id = $_GET['id'];


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
    $query = "DELETE FROM `khautrang` WHERE `IDKhauTrang` = '$id'";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Thêm <br>Sản Phẩm : ".$id."<br> Thành Công";
    }
    else {
        echo "Thêm <br>Sản Phẩm : ".$id."<br> That bai";
    }
    header('location:../QLSanPham.php');
}
//dong kn
mysqli_close($dbcon);
?>