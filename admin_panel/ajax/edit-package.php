<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{
	require_once("../connection.php");
	if($_POST['id']!=null)
	{
		$update=mysqli_query($con,"update packages set package_name='".$_POST['p-name']."' , package_level='".$_POST['p-level']."' , package_price='".$_POST['p-price']."' , package_sell_price='".$_POST['p-sell-price']."' , package_heading1='".$_POST['p-heading']."' , package_heading2='".$_POST['p-desc']."' , package_details='".$_POST['p-details']."' where id=".$_POST['id']);
		if($update)
		{
			echo "done";
		}
		else
		{
			echo mysqli_error($con);
		}
	}
	else
	{
		?>
		<script>
			window.location="../index";
		</script>
		<?php
	}
}
?>