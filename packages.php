<!DOCTYPE html>
<html lang="en">
        <head>
<meta name="msvalidate.01" content="28CFDE68244BA6945486A696A7A54546" />
<script src="https://kit.fontawesome.com/367a320177.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "e33btwg63n");
</script>
<title>Packages - Custom Web N Logo Design</title>
        <?php
            require_once("include/head.php");
        ?>
        <link rel="stylesheet" href="css/inner-custom.css">
    </head>
    <body>
       <?php
            require_once("include/nav.php");
        ?>
        <mian class="packagesMain">
    <section class="banner">
        <div class="banner-img">
            <img src="inner/banner/package_banner.png" alt="banner">
        </div>
        <div class="banner-content no-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="service-desc">
                                    <h1>
                                        Our Packages
                                    </h1>
                                    <p>
                                    Whatever we do, we simply aim to take it above average. Our portfolio displays some of our successful projects over the years.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12"></div>
                </div>
            </div>
        </div>
    </section>
    <?php
                require_once("package/packages.php");
                ?>
    </mian>
    
        <?php
            require_once("include/contact.php");
            require_once("include/client.php");
            ?>
        </main>
        <!--subscribe-->
<form method="post" id="sub">
            <section class="subscribe container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 text-center">
                            <h3>Looking for the finest web designing and development company, Kalispell, MT? Here we are.</h3>
                        </div>
                        <div class="col-xl-7">
                            <div class="input-container">
                                <i class="fa fa-envelope-o sub-icon" aria-hidden="true"></i>
                                <input name="email" class="input-field" type="email" placeholder="Enter Email Address..." required>
                                <div class="sub-btn-back">
                                <input  class="sub-btn" type="submit" name="" value="LET'S START"></div>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </section>

             </form>
            <!--subscribe end-->
        <?php
            require_once("include/footer.php");
            require_once("include/script.php");
        ?>
        <script src="js/package.js"></script>
</body>
</html>