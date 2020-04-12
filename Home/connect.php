<!-- Connect database with PDO -->
<?php
$severname="localhost";
$username="root";
$password="";
try{
    $conn=new PDO("mysql:host=$severname;dbname=qlkt",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
}
catch(PDOException $e){
    echo "Connect failed:".$e->getMessage();
}
?>

