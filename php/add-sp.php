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
    $query = "INSERT INTO `khautrang`(`IDKhauTrang`, `TenKhauTrang`, `idNCC`, `NUOCSX`, `Gia`, `SoLuong`)
     VALUES ('$id','$ten','$idncc','$xs','$gia','$sl')";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Thêm Sản Phẩm : ".$id." Thành Công";
    }
    else {
        echo "Thêm Sản Phẩm : ".$id." That bai";
    }
}
//dong kn
mysqli_close($dbcon);
?>