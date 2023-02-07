
<?php
	$con = mysqli_connect("localhost","techrpsj_customwebnlogodesigns","7j!pp_ab9nAi","techrpsj_customwebnlogodesigns");
	// Check connection
	if ($con -> connect_errno) {
	  echo "Failed to connect to Database: " . $con -> connect_error;
	  exit();
	}
?>