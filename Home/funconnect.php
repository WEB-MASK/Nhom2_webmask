<?php
global $conn;
// Hàm kết nối database
function db_connect(){
    global $conn;
    // Nếu chưa  kết nối thì kết nối
    if(!$conn){
        $conn=mysqli_connect('localhost','root','','test');
        mysqli_set_charset($conn,'utf8');
    }
}
// Hàm ngắt kết nối
function disconnect_db(){
    global $conn;
    if($conn){
        mysqli_close($conn);
    }
}
?>
