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
    $query = "UPDATE `khautrang` SET `TenKhauTrang`='$ten',`idNCC`='$idncc',`NUOCSX`='$xs',`Gia`= '$gia',`SoLuong`='$sl' WHERE `IDKhauTrang`='$id'";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Update <br>Sản Phẩm : ".$id."<br> Thành Công";
    }
    else {
        echo "Update <br>Sản Phẩm : ".$id."<br> That bai";
    }
}
//dong kn
mysqli_close($dbcon);
?>