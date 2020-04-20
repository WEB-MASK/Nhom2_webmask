<?php

if($_SESSION['level'] != "Admin") //phân quyền để chuyển trang
{
  header('location:./login.php');
}
?>