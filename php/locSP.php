<?php
$idncc = $_POST["idncc"];
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
    $output4 ='<tr id ="tb-khoa" class="row-first">                     
    <td width="100">ID</td>
    <td width="300">Tên Sản Phẩm</td>
    <td width="150">Giá</td>
    <td width="100">Số Lượng</td>
    <td width="200">Nhà Cung Cấp</td>
    <td width="100">Nước Sản Xuất</td>
    <td></td>
    <td></td>
</tr>';
    if($_POST["idncc"] != '')  
    {  
        $query = "SELECT `IDKhauTrang`, `TenKhauTrang`, `idNCC`, `NUOCSX`, `Gia`, `SoLuong` FROM `khautrang` WHERE idNCC = '$idncc'";  
    }  
    else  
    {  
        $query = "SELECT `IDKhauTrang`, `TenKhauTrang`, `idNCC`, `NUOCSX`, `Gia`, `SoLuong` FROM `khautrang` WHERE 1";
    } 
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
    {
        $output4 .= '<tr><td>' .$row[0]. '</td><td>' .$row[1]. '</td><td>' .$row[4]. '</td><td>' .$row[5]. '</td><td>' .$row[2]. '</td><td>' .$row[3]. '</td><td><a class = "xoa" href="./php/delete-sp.php?id='.$row[0].'">Xóa</a></td><td><a  class = "sua" href="./php/sua-sp.php?id='.$row[0].'">Sửa</a></td></tr>';
    }
    //dong kn
    mysqli_close($dbcon);
    echo $output4;
}

?>