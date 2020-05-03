<?php
$idhd = $_POST['idhd'];
$idkh = $_POST['idkh'];
$idnv = $_POST['idnv'];

include("../php/conn.php");
if(!$dbcon)
{
    echo'loi';
    
}
else
{
    $query = "INSERT INTO `hoadon`(`IDHoaDon`, `KHID`, `NhanVienID`)
    VALUES ('$idhd','$idkh','$idnv')";
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