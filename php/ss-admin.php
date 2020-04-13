<?php
include("./php/echoHTML.php");

if(!isset($_SESSION['level']))
{  
  header('location:login.php');
}

if( $_SESSION['level'] != "Admin" ) //phân quyền để chuyển trang
{
  header('location:login.php');
}
?>