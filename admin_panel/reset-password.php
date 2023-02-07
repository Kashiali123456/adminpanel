<!DOCTYPE html>
<html>
<head>
	<?php
		require_once("include/head.php");
		if(isset($_SESSION["admin_login"]))
	{
		?>
		<script>
			window.location="index";
		</script>
		<?php
	}
	$check=mysqli_query($con,"select * from login where reset_pass='".$_GET['id']."'");
	$row=mysqli_fetch_array($check);
		$reset_id=$row['reset_pass'];
	if($reset_id!=$_GET['id'])
	{
		?>
		<script>
			window.location="index";
		</script>
		<?php
	}
	?>
</head>
<body class="bg-theme bg-theme1">
	<div class="row mt-5">
		<div class="col-lg-3 d-none d-lg-block">
		</div>
						<div class="col-12 col-lg-6 mt-5">
							<div class="card radius-15">
								<form method="post" class="reset needs-validation" novalidate>
								<div class="card-body p-5">
									<div class="card-title text-center"> <i class="bx bxs-user-circle text-white font-60"></i>
										<h3 class="mb-5 mt-3 text-white">Reset Password</h3>
									</div>
									<hr>
									<div class="form-group">
										<label>Enter New Password</label>
										<input pattern=".{8,}" type="text" name="password" class="form-control form-control-lg radius-30" id="validationCustom02" placeholder="Enter your Password" required>
										<div class="invalid-feedback">Minimum 8 latters required</div>
									</div>
									<button type="submit" class="btn btn-light btn-lg px-5 radius-30 btn-block"><i class="bx bx-lock-alt"></i> Login</button>
									
								</div>
								</form>
								<script>
								// Example starter JavaScript for disabling form submissions if there are invalid fields
								(function () {
									'use strict';
									window.addEventListener('load', function () {
										// Fetch all the forms we want to apply custom Bootstrap validation styles to
										var forms = document.getElementsByClassName('needs-validation');
										// Loop over them and prevent submission
										var validation = Array.prototype.filter.call(forms, function (form) {
											form.addEventListener('submit', function (event) {
												if (form.checkValidity() === false) {
													event.preventDefault();
													event.stopPropagation();
												}
												else
												{

													$(".loading").removeClass("d-none");
												        $.ajax({  
												          type: 'POST',  
												          url: 'ajax/reset?id=<?=$_GET["id"]?>', 
												          data: $('.reset').serialize(),
												          success: function(data) {
												            $(".loading").addClass("d-none");
												            if(data == "done")
												            {
												            	alert("Password Updated");
												              window.location="login";
												            }
												            else
												            {
												              $(".invalid-feedback").show();
												            }
												            }
												          });
												        event.preventDefault();
													event.stopPropagation();
												}
												form.classList.add('was-validated');
											}, false);
										});
									}, false);
								})();
							</script>
							</div>
						</div>
						<div class="col-lg-3 d-none d-lg-block">
		</div>
					</div>


	<?php
		require_once("include/footer.php");
	?>
</body>
</html>