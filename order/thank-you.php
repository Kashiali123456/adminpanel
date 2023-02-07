<!DOCTYPE html>
<html>
  <head>
    <title>Thank You - Freelance</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom-scroller.css" rel="stylesheet">
    <link href="css/style-web.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <?php
            require_once("orderinclude/head.php");
        ?>
  </head>
  <body class="home-page">
    <?php
            require_once("orderinclude/nav.php");
        ?>
       
      
       
    <section class="thankyou_sec">
		<div class="container">
			<div class="main-thankyou">
					<div class="site-header">
						<h1 class="site-header__title" data-lead-id="site-header-title">Thank You for Your Order !</h1>
					</div>

					<div class="row justify-content-center">
						<div class="col-md-12 col-lg-8">
							<div class="main-content">
								<i class="fa fa-check main-content__checkmark" style="color: #f8a217;" id="checkmark"></i>
								<p class="main-content__body" data-lead-id="main-content-body"> Our Support Team will contact you shortly via your e-mail or number.</p>
								<p class="main-content__body">You can reach our support team anytime at:</p>
									<p class="need-help"><a href="mailto:info@customwebnlogodesigns.com" class="color-red" style="font-size:18px;">info@customwebnlogodesigns.com</a> </p>
									<p class="need-help color-red"><a href="tel:+1(347) 707-1217"><span class="color-gray">+1(347) 707-1217</span> </a></p>
								<p><a href="javascript:void(Tawk_API.toggle())"  class="start_live_chat chat"><i class="chat-icon for-sprite"></i> Start Live Chat</a></p>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
	<?php
  require_once("orderinclude/footer.php");
?>
</body>
</html>