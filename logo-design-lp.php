
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/367a320177.js" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,400;0,500;1,200;1,900&display=swap"
        rel="stylesheet">
    <!-- fontawesome cdn -->
    <script src="https://kit.fontawesome.com/9ce3c88e5a.js" crossorigin="anonymous"></script>



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/logo_design.css">
    <title>Logo Design</title>
</head>

<body>

    <script src="app.js"></script>
    <script src="./logodesign/logoimages.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            function counter(id, start, end, duration) {
                let obj = document.getElementById(id),
                    current = start,
                    range = end - start,
                    increment = end > start ? 1 : -1,
                    step = Math.abs(Math.floor(duration / range)),
                    timer = setInterval(() => {
                        current += increment;
                        obj.textContent = current;
                        if (current == end) {
                            clearInterval(timer);
                        }
                    }, step);
            }
            counter("count1", 0, 50, 3000);
            counter("count2", 0, 1572, 2500);
            counter("count3", 0, 2830, 3000);
            counter("count4", 0, 2007, 3000);
            counter("count5", 0, 8, 3000);
            counter("count6", 0, 100, 3000);
            counter("count7", 0, 5, 3000);
        });

    </script>
    <!-- pop up modal -->
    <script type="text/javascript">
        window.onload = function () {
            OpenBootstrapPopup();
        };
        function OpenBootstrapPopup() {
            $("#simpleModal").modal('show');
        }
    </script>
    <!-- pop up modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <!--starts from here  -->





    <!-- herobanner with form -->
  <header>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-8 logo">
                <img src="./images/logo.png" alt="">
            </div>
    
            <div class="col-sm-4 menuinfo">
                <div class="row">
                    <div class="col">
                        <a href="mailto:cwnldlogo@gmail.com">
                            <h3>Need Help? EMAIL US </h3>
                        </a>
                    </div>
                    <div class="vl"></div>
                    <div class="col">
                        <a href="tel:+1(347)707-1217">
                            <h3> Call +1(347) 707-1217</h3>
                        </a>
    
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

    <!-- herobanner with form -->
    <section class="herobanner">
        <div class="section-one p-5">
            <div class="container-fluid py-5">
                <div class="row">

                    <div class="col-md-5 col-sm-12">
                        <div class="row ylBg">
                            <h2>TOP WEBSITE DESIGN AGENCY</h2>
                        </div>
                        <!-- <div class="row"> -->
                            <h2 class="nj">Corporate Logo Design in <span> Kalispell, USA</span></h2>
                            <p class="ban-desc"><span>Custom Web n Logo Designs</span> offers the most lucrative <span>
                                    logo design in USA. </span> A custom logo design is the priority of any business,
                                brand or organization. A well-designed logo can play a leading role in attracting your
                                target audience. That's why it's important to hire a top logo design company to create a
                                corporate logo that reflects your company's values and mission. When you partner with
                                our reputable <span> logo design company in Kalispell,
                                </span> , you can ensure that your logo stands out from the competition and leaves a
                                lasting impression on your customers.</p>
                        <!-- </div> -->
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary discountBtn" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">UPTO 70% OFF ON ALL PACKAGES</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3"></div>



                    <div class="col-md-5  col-sm-6 form-col">
                        <div class="row desc-heading">
                            <div class="col">
                                <h2 class="h2-form">70% DISCOUNT</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="form-sub">Let's get started on your project, <br>
                                    <span> TELL US YOUR REQUIREMENTS!</span>
                                </p>
                            </div>
                        </div>

                        <form action="logo_design" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control customizefield" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control customizefield" id="email"
                                    aria-describedby="emailHelp" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control customizefield " id="phone"
                                    aria-describedby="emailHelp" placeholder="Phone no" required>
                            </div>
                            <button type="submit" class="form-submit" id="submit" name="submit">Submit Your
                                Request!</button>
                        </form>
                        <p class="form-sub">Our consultant will call you to confirm your order.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- herobanner with form -->


    <!-- logo design section second -->
    <section>
        <img src="./images/Group.png" class="group">


        <h2 class="webnHeading">JOIN THE LIST OF CUSTOM WEBNLOGO <br>DESIGNS SATISFIED CUSTOMERS.</h2>


        <div class="section-two">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-7 px-3">
                        <div class="row my-5">
                            <div class="col">
                                <h2 class="blkorn1">Best Logo Design <br> <span> Services | Kalispell, MT</span></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="secOnePara">You need a unique and attractive logo to put a face to your
                                    business
                                    or company. So if you're looking for a top logo design company to design a
                                    distinctive
                                    logo for your business or company, you've landed on one of the best sites for logo
                                    design in Kalispell. Custom Web n Logo Designs is a professional logo design company
                                    based in Kalispell, Montana. The logos we design help our clients achieve a solid
                                    position in the market. Our logo design services will help you win the competition
                                    among
                                    your competitors. We offer professional logo design services that you cannot get
                                    anywhere in the market for logo design companies. Our designs for all brand logos
                                    and
                                    names can easily differ from those of our competitors. As one of the leading
                                    branding
                                    and logo design companies, we create logos for any type of business to make them
                                    brands.
                                    If you need logo design Kalispell services, you can use our custom logo designers to
                                    distinguish and create stunning logos for your company or business.</p>


                            </div>
                        </div>

                    </div>

                    <!-- single count center will be SCC and two section 2nd col will go to right will be be SCR  -->
                    <div class="col-sm-4 counts py-5">
                        <div class="row">
                            <div class="col SCC">
                                <h4> <span id="count1" class="display-4"></span>+</h4>
                                <p>Creative Geeks</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h4><span id="count2" class="display-4"></span>+</h4>
                                <p>Clients Satisfaction</p>
                            </div>
                            <div class="col-6 SCR">
                                <h4><span id="count3" class="display-4"></span>+</h4>
                                <p>Leads Generated</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col SCC">
                                <h4> <span id="count4" class="display-4"></span>+</h4>

                                <p>Creative Geeks</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <h4><span id="count5" class="display-4"></span>+</h4>
                                <p>Clients Satisfaction</p>
                            </div>
                            <div class="col-6 SCR">
                                <h4> <span id="count6" class="display-4"></span>+</h4>

                                <p>Leads Generated</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col SCC">
                                <h4><span id="count7" class="display-4"></span>+</h4>
                                <p>Creative Geeks</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-1">
                        <h1 class="logodesign">LOGO DESIGN</h1>
                    </div>

                </div>
            </div>
        </div>

        <img src="./images/Group2.png" class="group1">
    </section>
    <!-- logo design section ends -->


    <!-- portfolio starts here -->
  <section>
        <img src="./images/Group3.png" class="group">
                            
                <div class="col-12 portfolio-headings">
                    <h4>Our Portfolio</h4>
                    <h2 class="blkorn my-3">Innovatively Unique Logo Designs</h2>
                    <p>At Custom Web n Logo Designs, we believe in creative freedom that allows our PROs to design
                        great, uniquely crafted logos that represent a brand's identity in the best possible way.
                    </p>
                </div>
          
            
            <div class="section-three">
                <div class="container-fluid">
                    
                    <div class="row my-3 portbtn">
                        <div class="col-6 col-sm-2"><button class="catebtn" onclick="c1()">Tech</button></div>
                        <div class="col-6 col-sm-2"><button class="catebtn" onclick="c2()"> E-commerce</button></div>
                        <div class="col-6 col-sm-2"><button class="catebtn" onclick="c3()">Informative</button></div>
                        <div class="col-6 col-sm-2"><button class="catebtn" onclick="c4()">Brand Logo</button></div>
                        <div class="col-6 col-sm-2"><button class="catebtn" onclick="c5()">Foundation</button></div>
                    </div>           
                
                    <div class="row my-5">
                        <div class="col-md-3 col-6 portfolioimgs"><img src="./logodesign/c1i1.png" id="c1i1" alt="">
                        </div>
                        <div class="col-md-3 col-6 portfolioimgs"><img src="./logodesign/c1i2.png" id="c1i2" alt="">
                        </div>
                        <div class="col-md-3 col-6 portfolioimgs"><img src="./logodesign/c1i3.png" id="c1i3" alt="">
                        </div>
                        <div class="col-md-3 col-6 portfolioimgs"><img src="./logodesign/c1i4.png" id="c1i4" alt="">
                        </div>
                        <div class="col-md-3 col-6 portfolioimgs"><img src="./logodesign/c1i5.png" id="c1i5" alt="">
                        </div>
                        <div class="col-md-3 col-6 portfolioimgs"><img src="./logodesign/c1i6.png" id="c1i6" alt="">
                        </div>
                        <div class="col-md-3 col-6 portfolioimgs"><img src="./logodesign/c1i7.png" id="c1i7" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <img src="./images/Group2.png" class="group1">
        <h1 class="headingCustom">CUSTOM WEB & LOGO</h1>
    </section>
    <!-- portfolio end here -->


    <!-- packages start here -->
   <section>

        <div class="col-12 pkgg">
            <h4>Our Packages </h4>
            <h2 class="blkorn my-3">Custom Web n Logo Design Packages</h2>
            <p>Check out our highly specialized packages for website design and logo services if you know
                exactly what you want, and let us help you get it right.</p>
        </div>



        <div class="section-four">
            <div class="container-fluid my-5">
                <div class="row pkgrow my-5">
                    <?php
                    $con = mysqli_connect("localhost","techrpsj_customwebnlogodesigns","7j!pp_ab9nAi","techrpsj_customwebnlogodesigns");
                	if ($con -> connect_errno) {
                	  echo "Failed to connect to Database: " .$con -> connect_error;
                	  exit();
                	}
                	$query="select * from packages where package_name='LOGO' order by package_sell_price ASC";
                	$fetch= mysqli_query($con, $query);
                	while ($row=mysqli_fetch_array($fetch)) {
            	?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 pkgbody mx-3 my-3">


                        <div class="row pkgName py-3">
                            <div class="col">
                                <?php
        					     $sell_price=$row['package_level'];
                             ?>
                                <h3><span class="package-price-sell">
                                        <?=$sell_price?>
                                    </span></h3>
                            </div>
                        </div>

                        <div class="row pkgprice">

                            <div class="col">
                                <?php
        					     $sell_price="$".$row['package_sell_price'];
                             ?>
                                <h4><span class="package-price-sell">
                                        <?=$sell_price?>
                                    </span></h4>

                            </div>

                        </div>


                        <div class="row pkgpricebig my-3">
                            <div class="col">
                                <?php
    						     $sell_price="$".$row['package_sell_price'];
                                ?>
                                <h2><span class="package-price-sell">
                                        <?=$sell_price?>
                                    </span></h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col pkgul mx-3">
                                <ul>
                                    <?php
        						     $sell_price="".$row['package_details'];
        						      sort($sell_price);
        						     $replaced = preg_replace("/\r|\n/", "*", $sell_price);
        						     $detailsArr = explode("*", $replaced);
        						     for($i=0; $i<sizeof($detailsArr); $i++){
        						         if(preg_match('/\s/',$detailsArr[$i])){
                                    ?>
                                    <li><i class="fa-solid fa-circle-check"></i>
                                        <?echo $detailsArr[$i]?>
                                    </li>
                                    <?php }}?>
                                </ul>
                            </div>
                        </div>

                        <div class="row orderbtn my-3">
                            <div class="col">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">Order Now</button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-5 infomodal">
                                                            <h3>Let’s get in touch</h3>
                                                            <!-- <p>we're open for any suggestion or just to have a chat </p> -->
                                                            <p>Address: 1001 S Main St 1001 S Main St, Kalispell, MT
                                                                59901,
                                                                USA</p>
                                                            <a href="tel:+1(347)707-1217" style="color:#fff;">
                                                                <p>phone:+1(347)707-1217</p>
                                                            </a>
                                                            <p>Email: cwnldlogo@gmail.com</p>

                                                        </div>


                                                        <div class="col-1"></div>
                                                        <div class="col-lg-6 formModal">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3>Get in touch </h3>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <form action="logo_order" method="post">
                                                                    <div class="form-row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="fullName">Full Name</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Name" id="fullName"
                                                                                name="name" required>
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="email_m">Email</label>
                                                                            <input type="email" class="form-control"
                                                                                placeholder="Email" id="email_m"
                                                                                name="email" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="phone_m">Phone no</label>
                                                                        <input type="tel" class="form-control"
                                                                            id="phone_m" placeholder="Phone"
                                                                            name="phone" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="text_m">Message</label>
                                                                        <textarea class="form-control" name="message"
                                                                            id="text_m" rows="3" required></textarea>
                                                                    </div>


                                                                    <button type="submit" class="btn btn-primary"
                                                                        id="business" name="submit">Submit</button>
                                                                </form>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row pkgcontact">
                            <div class="col">
                                <a href="tel:+1(347)707-1217">
                                    <h3>share your idea <br> +1(347) 707-1217 </h3>
                                </a>
                            </div>
                            <div class="col chatpkg">
                                <h3><a href="javascript:void(Tawk_API.toggle())"> Want to discuss? <br> Live Chat Now
                                    </a>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <?php
                	}
                ?>
                </div>
            </div>
        </div>
    </section>
    
    <!-- packages ends here -->
    

    <!-- value why choose us  -->
    <div class="feat pt-5 pb-5">
        <div class="container sec1500">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4>The Value Drivers We Offer:</h4>
                    <p>Here is why  <span>you should choose </span> to work with us</p>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="item"> <span class="icon feature_box_col_one"><img
                                src="./images/24-Customer-support.gif"></span>
                        <h6>24-Customer-support</h6>
                        <p>When your ideas don’t stop coming at any time in
                            day or even at night, why should your design
                            agency work in limited time.
                            Our account
                            managers continueto work & support you 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="item"> <span class="icon feature_box_col_two"><img src="./images/guarantee.gif"></span>
                        <h6>Guaranteed Satisfaction</h6>
                        <p>Our websites designs are guaranteed to get
                            you satisfied, with rigors review & feedback
                            process managed via project management tools
                            we don’t leave it to chance to get our
                            clients satisfied.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="item"> <span class="icon feature_box_col_three"><img
                                src="./images/Experienced-&-Creative-Designers.gif"></span>
                        <h6>Unique Designs</h6>
                        <p>Be it a Corporate website or an informative one, we
                            will design the most attractive & unique
                            web design for you.
                            if you would like to test our
                            skill by getting a mock design for you
                            for free, contact us now</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="item"> <span class="icon feature_box_col_four"><img
                                src="./images/Digital-Services-Provider.gif"></span>
                        <h6>Digital Services Provider</h6>
                        <p>When your ideas don’t stop coming at any time in
                            day or even at night, why should your design
                            agency work in limited time.
                            Our account
                            managers continueto work & support you 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="item"> <span class="icon feature_box_col_five"><img
                                src="./images/Efficient-and-Speedy-Delivery.gif"></span>
                        <h6>Efficient and Speedy Delivery</h6>
                        <p>When your ideas don’t stop coming at any time in
                            day or even at night, why should your design
                            agency work in limited time.
                            Our account
                            managers continueto work & support you 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-3">
                    <div class="item"> <span class="icon feature_box_col_six"><img
                                src="./images/user-experience.gif"></span>
                        <h6>Experienced & Creative Designers</h6>
                        <p>When your ideas don’t stop coming at any time in
                            day or even at night, why should your design
                            agency work in limited time.
                            Our account
                            managers continueto work & support you 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- -Ready to get your----- -->
        <section>
            <div class="container">
                <div class="row ready">
                    <div class="col-md-4">
                        <img class="Computer" src="./images/customorder.png">
                    </div>

                    <div class="col-md-8">
                        <h1 class="website_desigen">Ready to get your <span style="color:#fff;"> Logo Designed with
                                us</span>
                        </h1>
                        <p class="website_details">Take the leap and get ahead of your competitors. Get the website
                            you've always wanted - get the professional opinion of our experienced team for your
                            websites and digital marketing needs. Get in touch.</p>

                        <div class="row py-3">
                            <div class="col">
                                <a href="tel:+1(347)707-1217" style="color:#fff;">
                                    <h4 class="contact"> +1(347) 707-1217</h4>
                                </a>
                            </div>
                            <div class="col">
                                <button class="btn btn-primary contac_oder" data-toggle="modal"
                                    data-target=".bd-example-modal-lg" style="color:#000;">Order Now</button>
                            </div>
                        </div>
                   </div>
                </div>

            </div>
             
    </section>

    <!-- -----------------------Satisfied Clients!--------------- -->
    <section>
        <div class="container-fulid py-5">
            <div class="container sec1500">
                <div class="row py-5">
                    <div class="col">
                        <h1 class="Satisfied">Satisfied <span style="color: #F29E29;">Clients!</span> </h1>
                        <h2 class="check_out">Check out what they’re saying.</h2>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-4 col-6 Check_bg">
                        <img class="Check_img" src="./images/Image.png">



                    </div>
                    <div class="col-md-2 col-sm-2"></div>
                    <div class="col-md-6 col-sm-7 Absolutely">
                        <img src="./images/quotation-mark.png">
                        <h1 class="Absolutely_heading">Absolutely wonderful!</h1>
                        <p class="Absolutely_details">I hired them to make my supplements website and boy, they did a good job. Everytime I look at it, I get hungry for workout.</p>
                        <div class="row">
                            <div class="col">
                                <h4 class="Jack_Nitzsche">Jack Nitzsche</h4>
                                <p class="Investor">Investor Group Coordinator</p>
                            </div>
                            <div class="col Investor_img"> <img src="./images/Quotes.png"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- -----------------------Satisfied Clients end!--------------- -->


    <!-- Awards starts here -->
    <div class="container-fluid">
        <div class="container sec1500 my-5">
            <div class="row">
                <div class="col awards-headings">
                    <h4>Our Awards</h4>
                    <h2>Our Valued Clients & their trust is Our Greatest
                        Award</h2>
                        <div class="container">
                            <p>The most important goal we strive for in every website project is to achieve the results our clients want. We make sure that your message is delivered to your target audience in the most authentic and attractive way possible - so that your audience follows your ideas. We would be happy to work with you to disseminate information or make sales. Contact us and let us help you make the most of this step.</p>
                        </div>
                    
                </div>
            </div>

            <div class="container sec1500 ">
                <div class="row my-5" sty>
                    <div class="col awardimage"><img src="./images/img.png" alt=""></div>

                </div>
            </div>
        </div>
    </div>
    <!-- Awards ends here -->



    <!-- --------------------------- Company like Web----------------------------- -->
    <section class="company-web">
        <div class="container-fulid">
            <!--<div class="container">-->

                <div class="Company_BG">
                    <h2 class="Company">
                        Based in Kalispell, Montana USA. Company like Custom Web n Logo Designs can not be found elsewhere!
                    </h2>
                    <h4 class="Company_packag"> Find the best suitable packages for your business.</h4>


                   <div class="row">
                     <!--<div class="col-5 col-sm-4">-->
                         <div class="col-md-4">
                         <a href="tel:+1(347)707-1217">
                            <h2 class="call_toll"> <i class="fa fa-phone" aria-hidden="true"></i>TOLL FREE <br> +1(347) 707-1217
                          </h2>
                         </a>
                     </div>

                <!--<div class="col-2 col-sm-4">-->
                    <div class="col-md-4 btn-center">
                       <button type="button" class="Request" data-toggle="modal" data-target=".bd-example-modal-lg">Request A qoute</button>
                  </div>

                     <!--<div class="col-5 col-sm-4">-->
                         <div class="col-md-4">
                        <h1 class="need"><a href="javascript:void(Tawk_API.toggle())"> NEED HELP ?<br>
                    LIVE CHAT NOW </a> </h1>
                     </div>
                </div>

                </div>
            <!--</div>-->
        </div>
    </section>
    <!-- --------------------------------- Company like Web end----------------------------- -->


    <!-- Newsletter section starts here  -->
    <section class="subscribe">
        <div class="container-fluid ">
            <!--<div class="container py-5">-->
                <div class="row subscribe-newsletter">
                    <div class="col-md-6 Looking">
                        <h1>Looking for the finest web designing and development company, Kalispell, MT? Here we are.
                        </h1>
                    </div>

                    <div class="col-md-6 email-col">
                        <form action="email_subscribe" method="post">
                            <!--<div class="row">-->
                                <!--<div class="col-md-2 envelope">-->
                                    <!--<i class="fa fa-envelope"></i>-->
                                <!--</div>-->
                                <!--<div class="col-md-6">-->
                                <span class="icon-email">
                                    <i class="fa fa-envelope"></i>
                                </span>    
                                    
                                    <input type="Email" name="email" class="Email" placeholder="Enter Email Address" required>
                                    <button class="btn-sbmt" type="submit">Let's start</button>
                                <!--</div>-->
                                <!--<div class="col-md-4">-->
                                    <!--<input type="submit" value="Let’s Start" class="Submit_Email"  name="submit">-->
                                <!--</div>-->
                            <!--</div>-->
                        </form>
                    </div>
                </div>
            <!--</div>-->
        </div>
    </section>
    <!-- Newsletter section ends here -->

    <!-- info tab -->
    <section class="session">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="content_">
                        <div class="text_">
                            <h3>Connect Our Consultants <br>Now!</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="content_">
                        <div class="call_">
                            <a href="tel:+1(347)707-1217">
                                <i class="fa fa-phone"></i> <span>Dial Now <br> +1(347) 707-1217</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="content_">
                        <div class="call_">
                            <a href="mailto:cwnldlogo@gmail.com">
                                <i class="fa fa-envelope" aria-hidden="true"></i> <span>Email Us <br>
                                    cwnldlogo@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="content_">
                        <div class="call_">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> <span>Address <br> 1001 S Main St, Kalispell, MT 59901, USA</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info tab end -->



    <!-- footer starts here -->

    <!-- <footer>


        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6 borderr">
                        <ul>
                            <h3>About Us</h3>
                            <li>
                                <p>Welcome to The <a href="#" style=" color: #000; text-align: justify;">Custom Web N
                                        Logo
                                        Designs</a>. Where passion meets innovation. We are industry leaders in digital
                                    world or marketing and branding because we keep our operations fast, simple and
                                    result-driven. The choice of smart US businesses.</p>
                            </li>
                        </ul>

                    </div>

                    <div class="col-lg-3 col-6 borderr">
                        <ul>
                            <h3>SERVICES :</h3>
                            <li><a href="#">Logo Service</a></li>
                            <li><a href="#">Content Writing Service</a></li>
                            <li><a href="#">CMS Service</a></li>
                            <li><a href="#">Website Service</a></li>
                            <li><a href="#">Website Development Service</a></li>
                            <li><a href="#">SEO Service</a></li>
                            <li><a href="#">Social Media Marketing Services</a></li>
                            <li><a href="#">E-Commerce Service</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-6 borderr">
                        <ul>
                            <h3>QUICK LINKS :</h3>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>

                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6 footer-contact">

                        <ul>
                            <h3>CONTACT US :</h3>
                            <li><a rel="canonical" href="contact-us"><i class="fa fa-comments-o" aria-hidden="true"></i>
                                    <span style="margin-left: 6px;"> TALK TO US</span></a></li>
                            <li><a rel="canonical" href="tel:+1(347) 707-1217"><i class="fa fa-phone"
                                        aria-hidden="true"></i><span style="margin-left: 6px; margin-top: 10px;">
                                        +1(347)
                                        707-1217</span></a></li>
                            <li><a rel="canonical" href="tel:+1(347) 707-1217"><i class="fa fa-map-marker"
                                        aria-hidden="true"></i><span style="margin-left: 6px; margin-top: 10px;"> 1001 S
                                        Main St, Kalispell, USA.</span></a></li>
                            <li><a rel="canonical" class="btn footer-btn popupBox" data-toggle="modal"
                                    data-target="getQuote" href="javascript:"
                                    style="margin-left: 6px; border-radius: 20px;">Request a Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </footer> -->

    <!-- 
    <section class="end">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 text-center">
                    <a href="#"><img width="160px" src="./images/logo.png" alt="Waves Image"></a>
                </div>
                <div class="col-xl-4 col-sm-6 copyright">
                    &copy; Copyright 2022. <a href="https://customwebnlogodesigns.com/">Custom Web N Logo Designs</a>
                    All Right Reserved.
                </div>
                <div class="col-xl-2 col-lg-6 col-md- col-sm-6 col-12">
                    <div class="footer-social">
                        <a href="https://www.facebook.com/customwebnlogodesigns" target="_blank" ,
                            rel="nofollow noopener noreferrer"><i class="fa fa-facebook color-white"
                                style="margin-left: 10px;"></i></a>
                        <a href="https://www.linkedin.com/company/customwebnlogodesigns/" target="_blank" ,
                            rel="nofollow noopener noreferrer"><i class="fa fa-linkedin" aria-hidden="true"
                                style="margin-left: 10px;"></i></a>
                        <a href="https://www.instagram.com/customwebnlogodesigns/" target="_blank" ,
                            rel="nofollow noopener noreferrer"><i class="fa fa-instagram" aria-hidden="true"
                                style="font-weight:600; margin-left: 10px; "></i></a>
                        <a href="https://medium.com/@customwebnlogodesigns.com/" target="_blank" ,
                            rel="nofollow noopener noreferrer"><i class="fab fa-medium-m"
                                style=" margin-left: 10px; "></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="terms-policy">
                        <a rel="canonical" href="#" target="_blank">Privacy Policy</a> |
                        <a rel="canonical" href="#" target="_blank">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- footer ends here  -->





    <!-- pop up modal -->
    <div id="simpleModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content loadmodal">

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 bgBlkFriday">
                                <img src="./images/blkPOP.png" alt="" class="blkpopdesktop">
                                <img src="./images/Components-02.png" alt="" class="blkpopmobile">
                            </div>
                            <div class="col-lg-7 popWhite">
                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div class="col">
                                        <h3>Fill out & get 50% off.</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="popForm" method="post" action="logo-black-friday">
                                        <div class="form-group">
                                          <input type="text" name="name" class="form-control" id="popName" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                          <input type="email" name="email" class="form-control" id="popemail"  placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                          <input type="tel" class="form-control" name="phone" id="popNumb" placeholder="Phone" required>
                                        </div>
                                        <div class="form-group">
                                          
                                            <textarea class="form-control" id="popText" name="message" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn popSubmit"  name ="submit" >Send Message</button>
                                      </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- pop up modal -->
</body>

</html>

<script src="inner/bootstrap/4.0.0/js/bootstrap.min.js"></script>
         <script>
//      $(document).ready(function () {
//     $("#submit").click(function () {
//         alert("Email Sent Successfully");

        
//     });
// });
   $(document).ready(function () {
$('#business').click(function(){
   var name = $("#fullName").val(); 
   var email = $("#email_m").val(); 
   var phone = $("#phone_m").val(); 
   if( name == '' || email== '' || phone == ''  ){
       alert("Please fill Required field");
   }
   else{
       alert("Logo Design Order Email Sent Successfully");
   }
});
});

 $(document).ready(function () {
$('#submit').click(function(){
   var name = $("#name").val(); 
   var email = $("#email").val(); 
   var phone = $("#phone").val(); 
   
   if( name == '' || email== '' || phone == ''){
       alert("Please fill Required field");
   }
   else{
       alert(" Logo design Query Email Sent Successfully");
   }
});
});

  </script>
                 <!--Start of Tawk.to Script-->
                <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/6346d01e54f06e12d899ccb2/1gf69pu9g';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>
                <!--End of Tawk.to Script-->
</script>

<script>
     $(document).ready(function () {
    $(".popSubmit").click(function () {
   var name = $("#popName").val(); 
   var email = $("#popemail").val(); 
   var phone = $("#popNumb").val(); 
   if( name == '' || email== '' || phone == ''  ){
       alert("Please fill Required field");
   }
   else{
       alert("Logo Design Black Friday Email Sent Successfully");
   }
    });
});
</script>
<script>
    $(document).ready(function () {
    $(".Submit_Email").click(function () {
   var email = $(".Email").val(); 
   if(email== ''  ){
       alert("Please fill Required field");
   }
   else{
       alert("Logo Design  Email Subcribe Successfully");
   }
    });
});
</script>
<script type="text/javascript">        
$(document).ready(function () {        
$("#email").change(function () {    
var inputvalues = $(this).val();    
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
if(!regex.test(inputvalues)){    
alert("invalid email id");    
return regex.test(inputvalues);    
}  

});    
    
 });

</script>






