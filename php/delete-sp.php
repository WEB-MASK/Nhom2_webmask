<?php
$id = $_GET['id'];

include("./conn.php");
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
    $kq;
    header('location:../QLSanPham.php');
}
//dong kn
mysqli_close($dbcon);
?>