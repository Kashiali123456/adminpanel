<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	session_start();
	$_SESSION['package_id'] = $_POST['orderid'];
	if(isset($_SESSION['package_id']))
	{
		echo "done";
	}
}
?>