<!DOCTYPE html>
<html>
<head>
	<?php
		require_once("include/head.php");
	?>
</head>
<body class="bg-theme bg-theme1">
	<?php
		require_once("include/nav.php");
	?>
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Deshboard</div>
			<div class="pl-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Profile</li>
					</ol>
				</nav>
			</div>
	</div>

	<div class="user-profile-page">
		<div class="card radius-15">
			<div class="card-body">
				<div class="row">
					<div class="col-12 col-lg-7">
						<div class="d-md-flex align-items-center">
							<div class="mb-md-0 mb-3">
								<img src="assets/images/profile.jpg" class="rounded-circle shadow" width="130" height="130" alt="">
							</div>
							<div class="ml-md-4 flex-grow-1">
								<div class="d-flex align-items-center mb-1">
									<h4 class="mb-0"><?=$login_username?></h4>
								</div>
								<p class="mb-0">Email. <?=$login_email?></p>
								<br>
									<a href="#" class="btn btn-light">Update Profile</a>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>

	<?php
		require_once("include/footer.php");
	?>
</body>
</html>