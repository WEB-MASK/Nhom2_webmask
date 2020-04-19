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
    $query = "DELETE FROM `users` WHERE `userid` = '$id'";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Thành Công";
    }
    else {
        echo "That bai";
    }
    header('location:./../QLTaiKhoan.php');
}
//dong kn
mysqli_close($dbcon);
?>