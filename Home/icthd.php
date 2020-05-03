<?php
$idhd = $_POST['idhd'];
$kt = $_POST['kt'];
$sl = $_POST['sl'];


include("../php/conn.php");
if(!$dbcon)
{
    echo'loi';
    
}
else
{
    $query = "INSERT INTO `cthd`(`IDHoaDon`, `KhauTrangID`, `SoLuong`)
     VALUES ('$idhd','$kt','$sl')";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "ok";
    }
    else {
        echo "loi";
    }
}
//dong kn
mysqli_close($dbcon);
?>