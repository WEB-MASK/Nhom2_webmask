<?php
$magd = $_POST["magd"];
// require_once("funconnect.php");
$conn=mysqli_connect('localhost','root','','qlkt');
// db_connect();
$output = '<tr  class="table-success">
<th>
    Mã Giao Dịch
</th>
<th>
    Mã Khách Hàng
</th>
<th>
    Ngày Giao Dịch
</th>
<th>
    Nhân Viên giao Dịch
</th>
</tr>';
$sql='SELECT `IDHoaDon`, `NGHD`, `KHID`, `NhanVienID` FROM `hoadon` WHERE `IDHoaDon` like '.$magd.'' ;
$kq = mysqli_query($conn,$sql); //truyen sql vao mysql
while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
{
    $output .= '<tr><td>' .$row[0]. '</td><td>' .$row[2]. '</td><td>' .$row[1]. '</td><td>' .$row[3]. '</td></tr>';
}
//dong kn
mysqli_close($conn);
echo $output;
?>