<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sign In</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="assets/css/material-kit.css" rel="stylesheet"/> -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
   	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
</head>
<body class="signup-page">
		<!-- START-HEADER -->
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
                    <a class="navbar-brand page-scroll" href="<?php echo base_url();?>">
                        <img src="<?=base_url()?>assets/img/logo.png" alt="">
                    </a>
                    <!-- END LOGO -->

                </div>

                <!-- TOGGLE NAV -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li><a class="page-scroll" href="<?php echo base_url();?>">Home</a>
                        </li>
                        <li><a class="page-scroll" href="search">Search</a>
                        </li>
                        
                        <li><a class="page-scroll" href="<?php echo base_url();?>login">Login</a>
                        </li>
                        <li><a class="page-scroll" href="<?php echo base_url();?>register">Register</a>
                        </li>   
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
    <!-- END-HEADER -->
    
		<div id="home-area">
        <div class="overlay">
			<div class="container log">
				<div class="row special">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center wow fadeInLeft animated"> 
                    	<h2>Login</h2>
                    </div>
                    <div class="form-group">
                    	<label></label>
                    </div>
					<form class="contact-form  wow fadeInLeft animated" method="POST" action="<?php echo base_url();?>login" id="login-form" >
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

							<div>
								<?php 
												foreach ($this->aauth->get_infos_array() as $value) {
													echo $value;
											 	} 
											?>
							</div>
							
							<div class="content">

								<div class="form-group">
									
									<input type="email" class="form-control" placeholder="Your Email..." name="email" required>
								</div>

								<div class="form-group">
									
									<input type="password" placeholder="Password..." autocomplete="off" class="form-control" name="password" required />
								</div>

							</div>
							<div id="login-phase">
								<span class="footer text-left">
									<a href="recover">Forgot my password ?</a>
								</span>
								<div class="footer text-right">
									<input type="submit" name="login" class="btn btn-simple btn-primary btn-lg" value="LOGIN" id="login">
									
								</div>
							</div>	
							
						</div>
					</form>
				</div>
			</div>

		</div>

    </div>
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

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
	
	
</html>
