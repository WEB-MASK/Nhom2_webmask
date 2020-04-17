<?php
$id = $_POST['id'];
$ten = $_POST['ten'];
$gia = $_POST['gia'];
$sl = $_POST['sl'];
$idncc = $_POST['idncc'];
$xs = $_POST['xs'];


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
    $query = "INSERT INTO `khautrang`(`IDKhauTrang`, `TenKhauTrang`, `idNCC`, `NUOCSX`, `Gia`, `SoLuong`)
     VALUES ('$id','$ten','$idncc','$xs','$gia','$sl')";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Thêm <br>Sản Phẩm : ".$id."<br> Thành Công";
    }
    else {
        echo "Thêm <br>Sản Phẩm : ".$id."<br> That bai";
    }
}
//dong kn
mysqli_close($dbcon);
?>