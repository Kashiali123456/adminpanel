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
		<div class="breadcrumb-title pr-3">View / Edit / Delete</div>
			<div class="pl-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">Package Edit</li>
					</ol>
				</nav>
			</div>
	</div>
	<div class="row">
		<div class="col-12 mx-auto">
			<div class="card radius-15">
				<div class="card-body">
					<div class="card-title">
						<h4 class="mb-0">Add Packages</h4>
					</div>
					<hr>
					<form method="POST" id="edit-package">
						<?php
							if($_GET['id']!=null)
								{
									$id = $_GET['id'];
								}
							else {
									?>
								<script>
									window.location="index";
								</script>
								<?php
								}
							$fetch=mysqli_query($con,"select * from packages where id=".$id);
							while ($row=mysqli_fetch_array($fetch)) {
								$logos="";
								$ecommerce="";
								$cms="";
								$seos="";
								$websites="";
								$writings="";
								$socails="";
								$name = $row['package_name'];
								if($name=="LOGO")
								{
									$logos="selected";
								}
								elseif ($name=="CMS WEBSITE") {
									$cms="selected";
								}
								elseif ($name=="SEO") {
									$seos="selected";
								}
								elseif ($name=="E-COMMERCE") {
									$ecommerce="selected";
								}
								elseif ($name=="WEBSITE") {
									$websites="selected";
								}
								elseif ($name=="CONTENT WRITING") {
									$writings="selected";
								}
								elseif ($name=="SOCIAL MEDIA MARKETING") {
									$socails="selected";
								}
						?>
						<div class="form-body">
							<div class="form-group row">
								<label class="col-md-2 col-form-label">Package Name</label>
								<div class="col-md-4">
									<select class="form-control" name="p-name">
										<option <?=$cms?>>CMS WEBSITE</option>
										<option <?=$writings?>>CONTENT WRITING</option>
										<option <?=$ecommerce?>>E-COMMERCE</option>
										<option <?=$logos?>>LOGO</option>
										<option <?=$seos?>>SEO</option>
										<option <?=$socails?>>SOCIAL MEDIA MARKETING</option>
										<option <?=$websites?>>WEBSITE</option>
									</select>
								</div>
								<label class="col-md-2 col-form-label">Plan Name</label>
								<div class="col-md-4">
									<input type="text" class="form-control" placeholder="Package Basic , Package Advance , ETC" required value="<?=$row['package_level']?>" name="p-level">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">Package Heading</label>
								<div class="col-md-10">
									<input type="text" class="form-control" placeholder="Heading" required value="<?=$row['package_heading1']?>" name="p-heading">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">Heading Description</label>
								<div class="col-md-10">
									<input type="text" class="form-control" placeholder="One line description" required value="<?=$row['package_heading2']?>" name="p-desc">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">Actual Price</label>
								<div class="input-group col-md-10">
									<div class="input-group-prepend">
										<span class="input-group-text">$</span>
									</div>
									<input type="number" class="price form-control border-left-0" placeholder="10.00" required value="<?=$row['package_price']?>" name="p-price" step="any">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">Sell Price</label>
								<div class="input-group col-md-10">
									<div class="input-group-prepend">
										<span class="input-group-text">$</span>
									</div>
									<input type="number" class="price form-control border-left-0" placeholder="If package is not for sell then leave it." value="<?=$row['package_sell_price']?>" name="p-sell-price" step="any">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label">Package Details</label>
								<div class="col-md-10 col-lg-6">
									<textarea rows="8" class="form-control" id="p-details" placeholder="Use two times line break for the next line and use <b>heading</b> for heading." required name="p-details"><?=$row['package_details']?></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-md-2 col-form-label"></label>
								<div class="col-md-10">
									<button type="submit" name="submit" class="btn btn-light px-4">Update Package</button>
								</div>
							</div>
						</div>
						<?php
							}
						?>
						<input type="hidden" name="id" value="<?=$id?>">
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
		require_once("include/footer.php");
	?>
	<script>
		$(document).on("submit","#edit-package" , function(e){
        e.preventDefault();
        $(".loading").removeClass("d-none");
        $.ajax({  
          type: 'POST',  
          url: 'ajax/edit-package', 
          data: $('#edit-package').serialize(),
          success: function(data) {
            $(".loading").addClass("d-none");
            if(data == "done")
            {
              success_package_edit();
            }
            else
            {
              alert("Something went wrong please try again");
            }
            }
          });
      });
		//price formate
		(function($) {
  $.fn.currencyInput = function() {
    this.each(function() {
      $(this).change(function() {
        var value = this.valueAsNumber;
        $(this).val(value.toFixed(2)); 
      });
    });
  };
})(jQuery);

$(document).ready(function() {
  $('.price').currencyInput();
});
	</script>
</body>
</html>