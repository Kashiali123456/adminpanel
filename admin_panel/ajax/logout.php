<?php
	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
	{
		session_start();
		session_destroy();
		echo "done";
	}
?>