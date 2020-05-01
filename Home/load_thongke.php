<?php
$nam = $_POST["nam"];
$thang = $_POST["thang"];
// require_once("funconnect.php");
$conn=mysqli_connect('localhost','root','','qlkt');
// db_connect();
$output = '<tr  class="table-success">
<th>
Ngày
</th>
<th>
Doanh Thu
</th>
</tr>';
$sql='SELECT SUM(khautrang.Gia*cthd.SoLuong), hoadon.NGHD FROM hoadon,khautrang,cthd WHERE hoadon.IDHoaDon = cthd.IDHoaDon AND cthd.KhauTrangID = khautrang.KhauTrangID and YEAR(hoadon.NGHD) = '.$nam.' AND MONTH(hoadon.NGHD) = '.$thang.' GROUP BY hoadon.NGHD' ;
$kq = mysqli_query($conn,$sql); //truyen sql vao mysql
while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
{
    $output .= '<tr><td>' .$row[1]. '</td><td>' .$row[0]. '</td></tr>';
}
//dong kn
mysqli_close($conn);
echo $output;
?>