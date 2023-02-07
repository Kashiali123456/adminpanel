<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	require_once("../connection.php");
	$insert=mysqli_query($con,"insert into packages (package_name , package_level , package_price , package_sell_price , package_heading1 , package_heading2 , package_details) values ('".$_POST['p-name']."','".$_POST['p-level']."','".$_POST['p-price']."','".$_POST['p-sell-price']."','".$_POST['p-heading']."','".$_POST['p-desc']."','".$_POST['p-details']."')");
	if($insert)
	{
		echo "done";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>