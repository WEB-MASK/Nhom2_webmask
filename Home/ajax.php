<?php
include("funconnect.php");
global $conn;
db_connect();
if(isset($_POST['id'])){
    $id=$_POST['id'];
  
$sql="SELECT kt.TenKhauTrang, kt.IDKhauTrang FROM khautrang kt ,nhacungcap hkt WHERE kt.idNCC=hkt.idNCC AND hkt.idNCC='{$id}'";
    $query=mysqli_query($conn,$sql); echo "<option></option>";
    while($row=mysqli_fetch_assoc($query)){
       $kt = $row['IDKhauTrang'];
       $khautrang =  $row['TenKhauTrang'];
      
       echo "<option value='$kt'>$khautrang</option>";
    }
    
 }
 if( (!empty($_POST['sl']))){
    $tk=$_POST['tkt'];
    $sql="SELECT *FROM khautrang WHERE IDKhauTrang='{$tk}'";
    $query=mysqli_query($conn,$sql);
    $tong=0;
    while($row=mysqli_fetch_assoc($query)){
   //  $kq=$row['Gia'];
   $tong=$tong+$row['Gia']*$_POST['sl'];
    echo '<tr>
         <td>'.$row['idNCC'].'</td>
         <td>'. $row['IDKhauTrang'] . '</td>
         <td>'.$_POST['sl']. '</td>
         <td>'.$row['Gia'].'</td>
         <td>'. $row['Gia']*$_POST['sl'].'</td>
         
         </tr> ';
   }
   // echo $tong;
   
 }else{
    echo 'Cần điền số lượng';
 }


 if(isset($_POST['hktid'])){
    if($_POST['hktid'] !=''){
    $hktid=$_POST['hktid'];
    $sql="SELECT kt.TenKhauTrang, kt.IDKhauTrang,kt.NUOCSX,kt.Gia,kt.SoLuong,hkt.TenNCC FROM khautrang kt ,nhacungcap hkt WHERE kt.idNCC=hkt.idNCC AND hkt.idNCC='{$hktid}'";
    $query=mysqli_query($conn,$sql);
   //  $kq=mysqli_fetch_array($query,MYSQLI_ASSOC);
   //  echo count($kq);
   //  echo $kq['TenKhauTrang'];

   while($row=mysqli_fetch_assoc($query)){
       echo "<tr>";
       echo '<td>' . $row['IDKhauTrang'] . '</td>';
       echo '<td>'. $row['TenKhauTrang'] . '</td>';
       echo '<td>' . $row['TenNCC'] . '</td>';
       echo '<td >' . $row['NUOCSX'] . '</td>';
       echo '<td >' .$row['Gia']. '</td>';
       echo '<td>' . $row['SoLuong'] . '</td>';
       session_start();
   if(($_SESSION['log_users']) =='Admin'){
       echo '<td><b style="font-size:20px"><a href="EditUs.php?id=' . $row['userid'] . ' "  ><i class="lnr lnr-pencil"></i></a></b>
               <b style="font-size:20px; margin-left:12%"><a  href="deleteUs.php?id=' . $row['userid'] . '"   ><i class="lnr lnr-trash"></i></a></b></td>';
       echo "</tr> ";
   }


   };
}else{
   $sql="SELECT *FROM khautrang";
   $query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query)){
   echo "<tr>";
   echo '<td>' . $row['IDKhauTrang'] . '</td>';
   echo '<td>'. $row['TenKhauTrang'] . '</td>';
   echo '<td>'. $row['idNCC'] . '</td>';
   echo '<td >' . $row['NUOCSX'] . '</td>';
   echo '<td >' . $row['Gia'] . '</td>';
   echo '<td>' . $row['SoLuong'] . '</td>';
   if(($_SESSION['log_users']) =='Admin'){
   echo '<td><b style="font-size:20px"><a href="EditUs.php?id=' . $row['IDKhauTrang'] . ' "  ><i class="lnr lnr-pencil"></i></a></b>
           <b style="font-size:20px; margin-left:12%"><a  href="deleteUs.php?id=' . $row['IDKhauTrang'] . '"   ><i class="lnr lnr-trash"></i></a></b></td>';
   echo "</tr> ";
   }
  


};


}




 
}
// hoadon


?>