<?php

if(!isset($_SESSION['level']))
{  
  header('location:./login.php');
}