<div class="logo-package package-slide owl-carousel owl-theme">
	<?php
		$fetch=mysqli_query($con,"select * from packages where package_name='LOGO' order by package_sell_price ASC");
		$check = 0;
		while($row = mysqli_fetch_assoc($fetch)){
             $json[] = $row;
        }
        

        $val = array_shift($json);
        array_push($json, $val);
	   // echo json_encode($json);
	    foreach($json as $row) {
	?>
	<div class="slide-item">
		<div class="package-box package-box-blue">
			<div class="package-box-head package-box-head-blue">
				<div class="hr"></div>
				<?php
					if($row['package_sell_price']!=null)
					{
						$sell_price="$".$row['package_sell_price'];
						$actule_price="$".$row['package_price'];
					}
					else
					{
						$sell_price="$".$row['package_price'];
						$actule_price=$row['package_sell_price'];
					}
				?>
				<span class="package-price-sell"><?=$sell_price?></span>
				<span class="package-price"><del><?=$actule_price?></del></span>
			</div>
		<div class="package-top-btn-div">
			<a href="https://customwebnlogodesigns.com/packages" class="package-top-btn package-top-btn-blue"><?=$row['package_level']?></a>
		</div>
		</div>
		<div class="package-heading package-heading-blue">
			<div class="package-heading-top-white"></div>
			<h4 style="color:#fff;"><?=$row['package_heading1']?></h4>
			<p><i><?=$row['package_heading2']?></i></p>
			<div class="package-heading-bottom-white"></div>
		</div>
		<div class="package-middle-box package-middle-box-blue">
			<div class="package-details">
				<p><?=$row['package_details']?></p>
			</div>
			<div class="package-bottom">
			<button class="package-bottom-btn2"><a href="https://customwebnlogodesigns.com/order/payment" style="color:#000;">ORDER NOW</a></button>
			<a href="packages" class="package-bottom-btn2">SEE ALL PACKAGES</a>
			</div>
			<a href="https://customwebnlogodesigns.com/contact-us" class="package-talk">
			<i class="fa fa-comments-o" aria-hidden="true"></i>TALK TO US</a>
		</div>
	</div>
	<?php
	}
	?>
</div>