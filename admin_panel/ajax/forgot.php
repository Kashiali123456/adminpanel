<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
  require_once("../connection.php");
  $email= $_POST["email"];
  $fetch=mysqli_query($con,"select * from login where email='".$email."'");
  if(mysqli_num_rows($fetch)>0)
  {
    $a = rand();
    $query=mysqli_query($con,"update login set reset_pass='".$a."' where email='".$email."'");
    if($query)
    {
    $subject = "Reset Password Custom Web N Logo Design";
    $msg = 'Click Here For Reset Your Password http://localhost/freelance/admin_panel/reset-password?id='.$a;
    include("../include/mail.php");    
    echo "done";
    }
  }
}
?>