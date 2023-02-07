<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
  session_start();
  require_once("../connection.php");
  $email= $_POST["email"];
  $pass= $_POST["password"];
  $pass= md5($pass);
  $fetch=mysqli_query($con,"select * from login where email='".$email."' && password='".$pass."'");
  if(mysqli_num_rows($fetch)>0)
  {
    $_SESSION['admin_login'] = $email;
    echo "done";
  }
}
?>