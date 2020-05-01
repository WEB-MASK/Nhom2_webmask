<?php
// login
session_start();
$error=[];
include("funconnect.php");
global $conn;

db_connect();
if(($_SERVER["REQUEST_METHOD"]=="POST") &&( isset($_POST['login']))){
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
// $hashpass=password_hash($pass,PASSWORD_DEFAULT);
$sql="SELECT User_level,Last_name FROM users WHERE Email='$email' AND Password='$pass'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);


if($count==1){
    // session_register("login_users");
    $_SESSION['log_users']=$row['User_level'];
    $_SESSION['level'] = $row['User_level'];
    // $_SESSION['name']=$row['Last_name'];
    // echo $_SESSION['login_user'];
    header("location:../index.php");
}
else{
    array_push($error,"Your Login Email or Password is invalid");
 
}
};
// forgot passs
if(isset($_POST['resetpass'])){
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $sql="SELECT Email From users WHERE Email='$email'";
    $result=mysqli_query($conn,$sql);
    if(empty($email)){
        array_push($error,"Your email is required");
    }else if(mysqli_num_rows($result)<=0){
        array_push($error,"Sorry,no user exits on our system with email");
    }

$token=bin2hex(random_bytes(50));

if(count($error)==0){
   
    $sql="INSERT INTO pass_reset(Email,Token)VALUES('$email','$token') ";
    $result=mysqli_query($conn,$sql);
    
// send mail
$to=$email;
$subject="Reset your password on NCovid.com";
$msg="Hi there, click on this <a href=\"http://localhost:8080/WebMask/WebMask/Home/newpass.php?Token=" . $token . "\">link</a> to reset your password on our site";
$msg=wordwrap($msg,70);
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers.="From: Vuitrannb@gmail.com";
mail($to,$subject,$msg,$headers);
$_SESSION['token']=$token;
header('location:pedding.php?Email='.$email);

}
} 
if( isset($_POST['passet'])){
    $new_pass=mysqli_real_escape_string($conn,$_POST['newpass']);
    $new_pass_c=mysqli_real_escape_string($conn,$_POST['newpassc']);
    $token1= $_SESSION['token'];
    if(empty($new_pass)|| empty($new_pass_c))
       { array_push($error,"Password is required");
    };

    if($new_pass !== $new_pass_c){
        array_push($error,"Pass do not match");
    };
    if(count($error)==0){
       
         $sql="SELECT Email FROM pass_reset WHERE Token='$token1' LIMIT 1";
         $result=mysqli_query($conn,$sql); 
         $d=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //  echo count($d);
         $email= $d['Email'];

         if($email){
             $sql="UPDATE users SET Password='$new_pass' WHERE Email='$email'";
             $result=mysqli_query($conn,$sql);
             header('location:login.php');
         }else{
             echo 'Sai';
         }
    }
}


?>