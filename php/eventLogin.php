<?php
include("./conn.php");
$user = $_POST['user'];
$pass = $_POST['pass'];

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
    $query = "SELECT * from users where email = '$user' and Password ='$pass' ";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if(mysqli_num_rows($kq) > 0)  //kiem tra dong in ra > 0
    {
        while($row = mysqli_fetch_assoc($kq) ) //ham tra ve tat ca ket qua
        {
            session_start();
            $_SESSION['level'] = $row['User_level'];
            $_SESSION['username'] = $row['Last_name'];
            header("location:../index.php");
        }
    }
    else
    {
        header('location:../login.php?thongbao=loi');
    }

    //dong kn
    mysqli_close($dbcon);
}


?>