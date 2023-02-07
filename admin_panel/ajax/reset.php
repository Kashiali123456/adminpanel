<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
  require_once("../connection.php");
  $pass= md5($_POST["password"]);
  $insert=mysqli_query($con,"update login set password='".$pass."' , reset_pass='' where reset_pass='".$_GET['id']."'");
  if($insert)
  {
    echo "done";
  }
  echo mysqli_error($con);

}

?>