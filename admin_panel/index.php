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
		<div class="breadcrumb-title pr-3">Dashboard</div>
			<div class="pl-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
					</ol>
				</nav>
			</div>
	</div>
	<div class="row">
		<div class="col-xl-6">
			<div class="card radius-15">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0">Subscribers</h5>
						<br><br>
					</div>
					<div class="subscriber-scroll">
					<?php
					$fetch=mysqli_query($con,"select * from subscribers order by id desc");
						while ($row=mysqli_fetch_array($fetch)) {
					?>
					<hr>
					<div class="media align-items-center mt-3">
						<i class="lni lni-user" style="font-size: 40px;"></i>
						<div class="media-body ml-3">
							<p class="font-weight-bold mb-0 text-white">Email : <?=$row['email']?></p>
							<p class="mb-0">Date : <?=$row['date']?></p>
						</div> 
						<a href="mailto:<?=$row['email']?>" class="btn btn-sm btn-light radius-10">Contact Now</a>
					</div>
				<?php
				}
				?>
				</div>
				</div>
			</div>
		</div>

		<div class="col-xl-6">
			<div class="card radius-15">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h5 class="mb-0">Quote</h5>
						<br><br>
					</div>
					<div class="subscriber-scroll">
					<?php
						$fetch=mysqli_query($con,"select * from quote order by id desc");
						while ($row=mysqli_fetch_array($fetch)) {
					?>
					<hr>
					<div class="media align-items-center mt-3">
						<i class="lni lni-user" style="font-size: 40px;"></i>
						<div class="media-body ml-3">
							<p class="font-weight-bold mb-0 text-white">Name : <?=$row['name']?></p>
							<p class="mb-0">Email : <?=$row['email']?></p>
							<p class="mb-0"><?=$row['phone']?></p>
							<p class="mb-0">Date : <?=$row['date']?></p>
						</div> 
						<a href="mailto:<?=$row['email']?>" class="btn btn-sm btn-light radius-10">Contact Now</a>
					</div>	
					<?php
				}
					?>
				</div>
				</div>
			</div>
		</div>

	</div>
	<?php
		require_once("include/footer.php");
	?>
</body>
</html>