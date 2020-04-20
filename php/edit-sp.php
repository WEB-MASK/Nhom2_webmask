<?php
$id = $_POST['id'];
$ten = $_POST['ten'];
$gia = $_POST['gia'];
$sl = $_POST['sl'];
$idncc = $_POST['idncc'];
$xs = $_POST['xs'];
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
    $query = "UPDATE `khautrang` SET `TenKhauTrang`='$ten',`idNCC`='$idncc',`NUOCSX`='$xs',`Gia`= '$gia',`SoLuong`='$sl' WHERE `IDKhauTrang`='$id'";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Update Sản Phẩm : ".$id." Thành Công";
    }
    else {
        echo "Update Sản Phẩm : ".$id." That bai";
    }
}
//dong kn
mysqli_close($dbcon);
?>