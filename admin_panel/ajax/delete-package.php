<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	require_once("../connection.php");
	$delete=mysqli_query($con,"delete from packages where id=".$_POST['id']);
	if($delete)
	{
		echo "done";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>