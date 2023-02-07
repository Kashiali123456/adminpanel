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
	?>
</head>
<body class="bg-theme bg-theme1">
	<div class="row mt-5">
		<div class="col-lg-3 d-none d-lg-block">
		</div>
						<div class="col-12 col-lg-6 mt-5">
							<div class="card radius-15">
								<form method="post" class="login needs-validation" novalidate>
								<div class="card-body p-5">
									<div class="card-title text-center"> <i class="bx bxs-user-circle text-white font-60"></i>
										<h3 class="mb-5 mt-3 text-white">Admin Login</h3>
									</div>
									<hr>
									<div class="form-group">
										<label>Enter Email</label>
										<input type="email" id="validationCustom01" name="email" class="form-control form-control-lg radius-30" placeholder="Enter your Email" required>
										<div class="invalid-feedback">Please provide a valid email.</div>
									</div>
									<div class="form-group">
										<label>Enter Password</label>
										<input type="password" name="password" class="form-control form-control-lg radius-30" id="validationCustom02" placeholder="Enter your Password" required>
										<div class="invalid-feedback">Please provide a valid password</div>
									</div>
									<div class="form-row align-items-center mt-3">
										<div class="form-group col-md-6">
										</div>
										<div class="form-group col-md-6 text-right">
											<a href="forgot">Forgot Password ?</a>
										</div>
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
												          url: 'ajax/login', 
												          data: $('.login').serialize(),
												          success: function(data) {
												            $(".loading").addClass("d-none");
												            if(data == "done")
												            {
												              window.location="index";
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