<?php
// require_once("funconnect.php");
$conn=mysqli_connect('localhost','root','','qlkt');
// db_connect();
$sql="SELECT userid,Password FROM users";
$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs,MYSQLI_BOTH)){
   echo count($row); echo $row['Password'];
$sql="UPDATE ".users." SET ".Password."='".password_hash($row['Password'],PASSWORD_DEFAULT)."' WHERE ".userid."='".$row[userid]."'";
mysqli_query($conn,$sql);
}
?>