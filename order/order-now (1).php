<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Now - Freelance</title>
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom-scroller.css" rel="stylesheet">
    <link href="css/style-web.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script>
      
     $(document).ready(function() {
     $("signupBtn").click(function(){
        if(window.confirm("Your Form is successfully Submited?")){
            alert('Your Form is successfully Submited!');
        } else {
            alert('Your Form is Not Submited!');
        }
       }); 
     });
    </script>
</head>
    <?php
            require_once("orderinclude/head.php");
        ?>
  </head>
  <body class="home-page">
        <?php
            require_once("orderinclude/nav.php");
        ?>
    <section class="page-title">
  <div class="container">
    <h1>Let's Get Started with Your Project</h1>
    <p>Please Provide the information requested below.</p>
  </div>
</section>
<?php
// $package_id = $_SESSION['package_id'];
//   if(!is_numeric($package_id))
//   {
//      ?>
//      <script>
//       window.location="../packages";
//      </script>
//      <?php
//   }
//   else
//   {
//   $fetch=mysqli_query($con,"select * from packages where id=".$package_id);
//   if(mysqli_num_rows($fetch) < 1)
//   {
//     ?>
//      <script>
//       window.location="../packages";
//      </script>
//      <?php
//   }
  $row=mysqli_fetch_array($fetch);
  $formid="onestep";
  if($row['package_sell_price']!=null)
    {
      $sell_price=$row['package_sell_price'];
      $actule_price=$row['package_price'];
    }
  else
    {
      $sell_price=$row['package_price'];
      $actule_price=$row['package_sell_price'];
    }
?>
<section class="steps-seq">
  <div class="container">
    <ul id="progressbar">
        <li class="active"><h4>Order Now</h4></li>
        <?php
          if($row['package_name']=="WEBSITE")
          {
            $formid="web_brief";
            $text="Website Brief"
        ?>
        <li class="brief"><h4><?=$text?></h4></li>
        <?php
          }
          else if ($row['package_name']=="LOGO") {
            $formid="logo_brief";
            $text="Logo Brief"
            ?>
          <li class="brief"><h4><?=$text?></h4></li>
          <?php
          }
          ?>
        <li class="hideline"><h4>Confirm Order</h4></li>
    </ul>
  </div>
</section>
<section class="content-seq">
  <div class="container">
    <div class="row changedata">
      <div class="col-lg-9">
        <div class="row" style="display: flex;flex-wrap: wrap;">
          <div class="col-md-6 col-lg-5">
            <div class="boxpackages">

              <div class="packheads">
                <h3 class="montfont packageName"><?=$row['package_level']?></h3>
              </div>
              <div class="packdetails">
                <div class="packtitles">
                  <div class="fleft">
                    <h3 class="opensansfont packagePrice"><?=$sell_price?> <span><del><?=$actule_price?></del></span></h3>
                  </div>
                </div>
                  <div class="listpacks"><?=$row['package_details']?></div>
                <div class="botarea-pack">
                  <div class="liovechats-bx">
                    <a href="javascript:void(Tawk_API.toggle())" title="" class="chat">
                      <i style="color:#fd5056;" class="fa fa-comments" aria-hidden="true"></i>
                      <h5 class="montfont">Live Chat</h5>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6 col-lg-7" data-form-type="ordernow_form">
            <form id="<?=$formid?>" class="leadForm"  enctype="multipart/form-data" action="order_details">
              <div class="col-md-12 form-sec step-1-form">
                <h4>Please Fill the Form</h4>
                <ul>
                  
                  <li>
                    <label>Name <span class="req-field-star">*</span></label>
                    <input class="formname" type="text" name="name" placeholder="Name" required>
                  </li>
                  <li>
                    <label>Email Address <span class="req-field-star">*</span></label>
                    <input class="formemail" type="email" name="email" placeholder="Address" required>
                  </li>
                  <li>
                    <label>Phone Number <span class="req-field-star">*</span></label>
                    <input class="formphone" type="tel" name="telephone" placeholder="Phone Number" maxlength="13" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required>
                  </li>
                </ul>
              </div>
              <div class="col-md-12 form-sec ">
                <ul>
                  <li class="submit-btn">
                    <div id="formResult"></div>
                    <button type="submit" class="tbtn btn-red a-btn"
                      id="signupBtn"  value="1">SUBMIT
                    </button>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 sidebar">
        <h2><span>Need</span> Assistance?</h2>
        <ul>
          <li><a href="tel:+1(347) 707-1217"><i class="fa fa-phone" aria-hidden="true"></i>
            <span>Toll Free:</span> +1(347) 707-1217</a></li>
          <li><a href="javascript:void(Tawk_API.toggle())" class="chat"><i class="fa fa-comments"
            aria-hidden="true"></i>
            <span>Live Chat:</span>with our expert</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php
  }
            require_once("orderinclude/footer.php");
        ?>
        <script src="../js/jquery.js"></script>
// <script>
//   function dumpInArray(){
//           var arr = [];
//           $('.list-inline input[type="checkbox"]:checked').each(function(){
//               arr.push($(this).val());
//           });
//           return arr; 
//         }
// $(document).ready(function(){
//       $(".leadForm").submit(function(e){
//         e.preventDefault();
//         $(".loading").removeClass("d-none");
//           var formid = $(this).attr("id");
//           var name = $(".formname").val();
//           var email = $(".formemail").val();
//           var number = $(".formphone").val();
//           $.ajax({  
//           type: 'POST',  
//           url: 'function/order_record?submit', 
//           data: { formid : formid , name : name , email : email , number : number , packageid : <?=$package_id?>},
//           success: function(data) {
//             $(".loading").addClass("d-none");
//             if(data == "onestep")
//             {
//               window.location="payment";
//             }
//             else
//             {
//               $(".changedata").html(data);
//               $(".brief").addClass("active");
//             }
//             }
//           });
//       });

//       $(document).on("submit","#logo_brief_data" , function(e){
//         e.preventDefault();
//         $(".loading").removeClass("d-none");
//         var logo_type = dumpInArray().join(" | ");
//         var text1 = $("#logotext1").val();
//         var text2 = $("#logotext2").val();
//         var text3 = $("#logotext3").val();
//         var text4 = $("#logotext4").val();
//         var text5 = $("#logotext5").val();
//         var text6 = $("#logotext6").val();
//         $.ajax({  
//           type: 'POST',  
//           url: 'function/brief_record?logosubmit', 
//           data: { logo_type : logo_type , text1 : text1 , text2 : text2 , text3 : text3 , text4 : text4 , text5 : text5 , text6 : text6},
//           success: function(data) {
//             $(".loading").addClass("d-none");
//             if(data == "done")
//             {
//               window.location="payment";
//             }
//             else
//             {
//               alert("Something went wrong please order again");
//               window.location="../packages";
//             }
//             }
//           });
//       });

//       $(document).on("submit","#web_brief_data" , function(e){
//         e.preventDefault();
//         $(".loading").removeClass("d-none");
//         var radio1 = $("input[name='radio1']:checked").val();
//         var radio2 = $("input[name='radio2']:checked").val();
//         var radio3 = $("input[name='radio3']:checked").val();
//         var radio4 = $("input[name='radio4']:checked").val();
//         var radio5 = $("input[name='radio5']:checked").val();
//         var radio6 = $("input[name='radio6']:checked").val();
//         var radio7 = $("input[name='radio7']:checked").val();
//         var radio8 = $("input[name='radio8']:checked").val();
//         var radio9 = $("input[name='radio9']:checked").val();
//         var radio10 = $("input[name='radio10']:checked").val();
//         var text1 = $("#webtext1").val();
//         var text2 = $("#webtext2").val();
//         var text3 = $("#webtext3").val();
//         var text4 = $("#webtext4").val();
//         var text5 = $("#webtext5").val();
//         var text6 = $("#webtext6").val();
//         var text7 = $("#webtext7").val();
//         var text8 = $("#webtext8").val();
//         var text9 = $("#webtext9").val();
//         var text10 = $("#link1").val()+"\n"+$("#link2").val()+"\n"+$("#link3").val()+"\n"+$("#link4").val();
//         var text11 = $("#webtext11").val();
//         var text12 = $("#webtext12").val();
//         var text13 = $("#webtext13").val();
//         var text14 = $("#webtext14").val();
//         var text15 = $("#webtext15").val();
//         var text16 = $("#webtext16").val();
//         $.ajax({  
//           type: 'POST',  
//           url: 'function/brief_record?websubmit', 
//           data: {text1 : text1 , text2 : text2 , text3 : text3 , text4 : text4 , text5 : text5 , text6 : text6 , text7 : text7 , text8 : text8 , text9 : text9 , text10 : text10 , text11 : text11 , text12 : text12 , text13 : text13 , text14 : text14 , text15 : text15 , text16 : text16 ,radio1:radio1,radio2:radio2,radio3:radio3,radio4:radio4,radio5:radio5,radio6:radio6,radio7:radio7,radio8:radio8,radio9:radio9,radio10:radio10},
//           success: function(data) {
//             $(".loading").addClass("d-none");
//             if(data == "done")
//             {
//               window.location="payment";
//               alert("Your Order is complete Successfully");
//             }
//             else
//             {
//               alert("Something went wrong please order again");
//               window.location="../packages";
//             }
//             }
//           });
//       });
// });
</script>

</body>

</html>
