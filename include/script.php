	<script src="js/jquery.js"></script>
        <script src="inner/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="inner/js/intlTelInput.js"></script>
        <script src="inner/js/jquery.waypoints.js"></script>
        <script src="inner/js/jquery.countup.min.js"></script>
        <script src="inner/js/slick.min.js"></script>
        <script src="inner/js/slimScroll.js"></script>
        <script src="inner/js/jquery.magnific-popup.min.js"></script>
        <script src="inner/js/jQuery-plugin-progressbar.js"></script>
        <script src="inner/js/plugins.js"></script>
        <script src="inner/js/jquery.validate.min.js"></script>
        <script src="inner/js/custom.js"></script>
	<!--plugin -->
	<script type="text/javascript" src="js/plugin/owlcarousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/plugin/owlcarousel/custom.js"></script>
	<!-- custom -->
	<script src="js/myjs.js"></script>

<!-- Forms validation -->
<script src="inner/js/form_validator.min.js"></script>

<!-- Main Requests Helper -->
<script src="inner/js/core/ajaxHelper.js"></script>

<!-- General Functions -->
<script src="inner/js/core/generalHelper.js"></script>

<!-- Sweet Alert -->
<link rel="stylesheet" type="text/css" href="inner/js/alert/sweetalert.css">
<script src="inner/js/alert/sweetalert.min.js"></script>
<script>
    
    // validation Initializing
    $.validate({});
    
    // Captcha Key Initializing
    // var captchaKey = ""

</script>
<!-- Lead Management Of Form -->
<script src="inner/js/core/leadManagement.js"></script>

<script src="inner/js/core/pricingManagement.js"></script>  
<script>
    function order_id(id)
    {
        $(".loading").removeClass("d-none");
        var orderid = id;
        $.ajax({  
        type: 'POST',  
        url: 'function/orderscript', 
        data: { orderid : orderid},
        success: function(data) {
            $(".loading").addClass("d-none");
            if(data=="done")
            {
            window.location="order/order-now";
            }
            else
            {
                alert("Update/Change your browser");
            }
        }
        });
    }
    //quote form
    $(document).on("submit",".leadForm" , function(e){
        e.preventDefault();
        var country = $(this).parent().find('.selected-flag').attr("title");
        $(".loading").removeClass("d-none");
        $.ajax({  
          type: 'POST',  
          url: 'function/form?quote='+country, 
          data: $(this).serialize(),
          success: function(data) {
            $(".loading").addClass("d-none");
              alert(data);
            }
          });
      });
    $(document).on("submit","#sub" , function(e){
        e.preventDefault();
        $(".loading").removeClass("d-none");
        $.ajax({  
          type: 'POST',  
          url: 'function/form?sub', 
          data: $(this).serialize(),
          success: function(data) {
            $(".loading").addClass("d-none");
              alert(data);
            }
          });
      });
</script>
