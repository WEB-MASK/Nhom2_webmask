<?php
$ho = $_POST['ho'];
$ten = $_POST['ten'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$level = $_POST['level'];
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
    $query = "INSERT INTO `users`(`First_name`, `Last_name`, `Password`, `Email`, `User_level`)  VALUES (N'$ho',N'$ten','$pass','$user','$level')";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Thêm <br>Create User : ".$user."<br> Thành Công";
    }
    else {
        echo "Thêm <br>Create User : ".$user."<br> That bai";
    }
}
//dong kn
mysqli_close($dbcon);
?>