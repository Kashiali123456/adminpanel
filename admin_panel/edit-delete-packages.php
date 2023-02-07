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
		$fetch=mysqli_query($con,"select * from packages order by id desc");
	?>
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Packages</div>
			<div class="pl-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">View / Edit / Delete</li>
					</ol>
				</nav>
			</div>
	</div>
	<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">DataTable Import</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Package Name</th>
											<th>Plan Name</th>
											<th>Package Heading</th>
											<th>Heading Description</th>
											<th>Actual Price</th>
											<th>Sell Price</th>
											<th>Package Details</th>
											<th>Edit / Delete</th>
										</tr>
									</thead>
									<tbody>
										
											<?php
											$count = 0;
											while ($row=mysqli_fetch_array($fetch)) {
												$count++;
											?>
											<tr>
											<td><?=$count?></td>
											<td><?=$row['package_name']?></td>
											<td><?=$row['package_level']?></td>
											<td><?=$row['package_heading1']?></td>
											<td><?=$row['package_heading2']?></td>
											<td>$<?=$row['package_price']?></td>
											<td>$<?=$row['package_sell_price']?></td>
											<td style="white-space: pre;"><?=$row['package_details']?></td>
											<td>
												<a href="package-edit?id=<?=$row['id']?>" class="btn btn-light" target="_blank">Edit</a>&nbsp;
												<button data-toggle="modal" data-target="#delete" type="button" class="package-delete btn btn-danger" id="<?=$row['id']?>">Delete</button>
											</td>
											</tr>
											<?php
												}
											?>
										
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
							<!-- Modal -->
							<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Delete Package</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">Are you sure you want to delete this package?</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
											<button type="button" id="" class="p-delete btn btn-danger">Delete</button>
										</div>
									</div>
								</div>
							</div>
	<?php
		require_once("include/footer.php");
	?>
	<!--Data Tables js-->
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).on("click",".package-delete",function(e){
			e.preventDefault();
			var id = $(this).attr("id");
			$(".p-delete").attr("id",id);
		});
	$(document).on("click",".p-delete" , function(e){
        e.preventDefault();
        $(".loading").removeClass("d-none");
        var id = $(this).attr("id");
        $.ajax({  
          type: 'POST',  
          url: 'ajax/delete-package', 
          data: {id : id},
          success: function(data) {
            $(".loading").addClass("d-none");
            if(data == "done")
            {
            	success_package_delete();
            	setTimeout(function() {
			        location.reload();
			    }, 2000);
            }
            else
            {
              alert("Something went wrong please try again");
            }
            }
          });
      });
		$(document).ready(function () {
			//Default data table
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
</body>
</html>