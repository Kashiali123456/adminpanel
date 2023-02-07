<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	session_start();
	if(isset($_GET['submit']))
	
	{
		$_SESSION['formid']=$_POST['formid'];
		$_SESSION['name']=$_POST['name'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['number']=$_POST['number'];
		$_SESSION['packageid']=$_POST['packageid'];
		
		if($_POST['formid']=="web_brief")
		{
		    
			include '../orderinclude/web-brief.php';
		}
		else if($_POST['formid']=="logo_brief")
		{
			include '../orderinclude/logo-brief.php';
		}
		else if($_POST['formid']=="onestep")
		{
			echo "onestep";
		}
		
	}
	
}

?>
