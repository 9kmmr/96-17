<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Daily Law Times</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts - which you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url();?>assets/css/style.css' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body id="top">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade ybrowser</a> to improve your experience.</p>
    <![endif]-->

    <header>
        <!-- NAVIGATION -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- LOGO -->
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                    <!-- END LOGO -->

                </div>

                <!-- TOGGLE NAV -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li><a class="page-scroll" href="#top">Home</a>
                        </li>
                        <li><a class="page-scroll" href="search">Search</a>
                        </li>
                        <?php if ( $check_login ) { ?>
                            <li><a class="page-scroll" href="<?php echo base_url();?>logout">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li><a class="page-scroll" href="<?php echo base_url();?>login">Login</a>
                            </li>
                            <li><a class="page-scroll" href="<?php echo base_url();?>register">Register</a>
                            </li>
                        <?php } ?>
                        <li><a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- TOGGLE NAV -->

            </div>
            <!-- /.container -->
        </nav>
        <!-- END NAVIGATION -->
    </header>

    <!-- HOME -->
    <div id="home-area">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <!-- HOME CONTENT -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="home-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
                            <h1>Welcome</h1>
                            <p>We are the <strong>biggest law database</strong> with a Strong and Fast full-text search tools.</p>
                            <a class="button home" href="search">Start Searching</a>
                        </div>
                    </div>
                    <!-- END HOME CONTENT -->

                    <!-- HOME FEATURE IMAGE -->
                    <div class="col-md-6 col-sm-6 col-xs-12"> 
                        <div class="home-feature center-block wow bounceIn user-type" data-wow-duration="1s" data-wow-delay="1s">
                            <form method="POST" action="<?php echo base_url(); ?>register">
                                <div class="plans">

                                    <div class="plan">
                                        <h3 class="plan-title">Basic User</h3>
                                        <p class="plan-price">$0 <span class="plan-unit">per month</span></p>
                                        <ul class="plan-features">
                                            <li class="plan-feature">1000 <span class="plan-feature-name">requests</span></li>
                                            <li class="plan-feature">100 <span class="plan-feature-name">documents download</span></li>
                                            <li class="plan-feature">30 <span class="plan-feature-name">requests / day</span></li>
                                        </ul>
                                        <button name="basic" value="basic" class="plan-button">Choose Plan</button>
                                    </div>

                                    <div class="plan plan-highlight">
                                        <p class="plan-recommended">Recommended</p>
                                        <h3 class="plan-title">Pro User</h3>
                                        <p class="plan-price">$49 <span class="plan-unit">per month</span></p>
                                        <ul class="plan-features">
                                            <li class="plan-feature">50000 <span class="plan-feature-name">requests</span></li>
                                            <li class="plan-feature">2000 <span class="plan-feature-name">documents download</span></li>
                                            <li class="plan-feature">1000 <span class="plan-feature-name">requests / day</span></li>
                                        </ul>
                                        <button name="pro" value="pro" class="plan-button">Choose Plan</button>
                                    </div>

                                    <div class="plan">
                                        <h3 class="plan-title">Premium User</h3>
                                        <p class="plan-price">$99 <span class="plan-unit">per month</span></p>
                                        <ul class="plan-features">
                                            <li class="plan-feature">unlimited <span class="plan-feature-name">requests</span></li>
                                            <li class="plan-feature">unlimited <span class="plan-feature-name">documents </span></li>
                                            <li class="plan-feature">unlimited <span class="plan-feature-name">requests / day</span></li>
                                        </ul>
                                        <button name="premium" value="premium" class="plan-button">Choose Plan</button>
                                    </div>
                                
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END HOME FEATURE IMAGE -->

                </div>
            </div>
        </div>
    </div>
    <!-- END HOME -->

    <!-- SERVICES -->
    <section id="services" class="section text-center">
        <div class="container">
            <h2 class="section-title wow fadeIn">Our Database</h2>
            <div class="row">

                

                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".9s">
                        <div class="service-title">
                            <i class="fa fa-shopping-cart fa-3x"></i>
                        </div>
                        <div class="service-content">
                            <h3>The biggest Law Database in Indian</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet odit amet repellendus, eum ipsum laboriosam.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.2s">
                        <div class="service-title">
                            <i class="fa fa-cog fa-3x"></i>
                        </div>
                        <div class="service-content">
                            <h3>3 TB data of all subject</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet odit amet repellendus, eum ipsum laboriosam.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

                <!-- SINGLE SERVICE -->
                <div class="col-md-4 col-sm-6">
                    <div class="single-service text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">
                        <div class="service-title">
                            <i class="fa fa-rocket fa-3x"></i>
                        </div>
                        <div class="service-content">
                            <h3>1 Billion record</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet odit amet repellendus, eum ipsum laboriosam.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE SERVICE -->

            </div>
            <!--.row-->
        </div>
        <!--/.container -->
    </section>
    <!-- END SERVICES -->

    

    <!-- NEWSLETTER -->
    <section id="newsletter" class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="newsletter-content wow fadeInDown" data-wow-duration="1s">
                        <h2>Like our Work? Stay Connected</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, optio.</p>
                    </div>
                    <div class="form-group wow fadeInUp" data-wow-duration="1s">
                        <input type="email" class="form-control" placeholder="Your Email Address">
                        <input type="submit" class="pull-right button newsletter">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END NEWSLETTER -->

    <!-- TESTIMONIAL -->
    <section id="testimonial" class="section text-center">
        <h2 class="section-title">Testimonial</h2>
        <div class="container">

            <!-- TESTIMONIAL SLIDER -->
            <div id="owl-demo" class="owl-carousel owl-theme">

                <!-- SINGLE TESTIMONIAL -->
                <div class="item">
                    <div class="single-testimonial">
                        <img class="center-block wow fadeInDown" data-wow-duration="1s" src="assets/img/client.png" alt="Testimoinial">
                        <p class="wow fadeInDown" data-wow-duration="1s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui velit modi quasi ut placeat, id cum architecto cumque consequatur rem.
                        </p>
                        <div class="social-networks wow fadeInDown" data-wow-duration="1s">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE TESTIMONIAL -->

                <!-- SINGLE TESTIMONIAL -->
                <div class="item">
                    <div class="single-testimonial">
                        <img class="center-block wow fadeInDown" data-wow-duration="1s" src="assets/img/client2.png" alt="Testimoinial">
                        <p class="wow fadeInDown" data-wow-duration="1s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui velit modi quasi ut placeat, id cum architecto cumque consequatur rem.
                        </p>
                        <div class="social-networks wow fadeInDown" data-wow-duration="1s">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE TESTIMONIAL -->

                <!-- SINGLE TESTIMONIAL -->
                <div class="item">
                    <div class="single-testimonial">
                        <img class="center-block wow fadeInDown" data-wow-duration="1s" src="assets/img/client3.png" alt="Testimoinial">
                        <p class="wow fadeInDown" data-wow-duration="1s">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui velit modi quasi ut placeat, id cum architecto cumque consequatur rem.
                        </p>
                        <div class="social-networks wow fadeInDown" data-wow-duration="1s">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END SINGLE TESTIMONIAL -->

            </div>
            <!-- END TESTIMONIAL SLIDER -->

            <div class="testimonial-action wow fadeInUp" data-wow-duration="1s">
                <a class="button testimonial" href="#">Read More</a>
            </div>

        </div>
        <!--/.container -->
    </section>
    <!-- END TESTIMONIAL -->

    <!-- GET TRIAL -->
    <section id="get-trial" class="section text-center">
        <div class="container">
            <h4 class="wow fadeInLeft" data-wow-duration="1s">If you like our product features and our portfolio then you can get trial for FREE</h4>
            <a class="button get-trial wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s" href="#">Get a Trial</a>
        </div>
    </section>
    <!-- END GET TRIAL -->

    <!-- CONTACT US -->
    <section id="contact" class="section text-center">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="row">

                <!-- CONTACT FORM -->
                <div class="col-md-7 col-md-offset-1 text-left wow fadeInLeft" data-wow-duration="1s">
                    <form action="#" method="post" class="contact-form  wow fadeInLeft">
                        <div class="form-group">
                            <input type="text" required class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" required class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea required class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="pull-left send-button button">Send Message</button>
                    </form>
                </div>
                <!-- END CONTACT FORM -->

                <!-- CONTACT INFO -->
                <div class="col-md-3">
                    <div class="contact-info text-left wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <h3>Get In Touch</h3>
                        <p><span><i class="fa fa-map-marker"></i></span> Daily Law Times Private Limited</p>
                        <p><span><i class="fa fa-map-marker"></i></span> 1, Sardarpura, UDAIPUR - 313001 RAJASTHAN - INDIA</p>
                        <p><span><i class="fa fa-phone"></i></span> +91 294 2425004</p>
                        <p><span><i class="fa fa-envelope-o"></i></span> dailylawtimes@gmail.com</p>
                    </div>
                    
                </div>
                <!-- END CONTACT INFO -->

            </div>
        </div>
    </section>
    <!-- END CONTACT US -->

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">

                <!-- FOOTER MENU -->
                <div class="col-md-6">
                    <div class="footer-menu">
                        <ul class="list-inline">
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">About</a>
                            </li>
                            <li><a href="#">Contact</a>
                            </li>
                            <li><a href="#">Portfolio</a>
                            </li>
                            <li><a href="#">Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END FOOTER MENU -->

                <!-- FOOTER CONTENT -->
                <div class="col-md-6">
                    <div class="footer-content text-right">
                        <p>&copy; 2014 All Rights Reserved, <a href="http://codeponsive.com/">CodePonsive</a>
                        </p>
                    </div>
                </div>
                <!-- END FOOTER CONTENT -->

            </div>
            <!-- /.row -->
        </div>
        <!-- ./container -->
    </footer>
    <!-- END FOOTER -->


    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58035815-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- js files -->
    <script src="assets/js/vendor/jquery-1.10.2.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/prettyPhoto.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
