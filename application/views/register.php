
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?=base_url()?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sign Up </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="<?=base_url()?>assets/css/material-kit.css" rel="stylesheet"/> -->
	
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
                    <a class="navbar-brand page-scroll" href="#page-top">
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
     <!-- HOME -->
    <div id="home-area">
        <div class="overlay">
        	
            <div class="container two">
                <div class="row special">

                    <!-- HOME CONTENT -->
                    <!-- <div class="col-md-6 col-sm-6 col-xs-12 main-slogan">
                        <div class="home-content wow fadeInLeft main-slogan2" data-wow-duration="1s" data-wow-delay="0s"> -->
                                                    
                      
                    
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft animated"> 
                    	<h2>Join us to search all law</h2>
                    </div>
                    <div class="form-group">
                    	<label></label>
                    </div>
                    <!-- HOME FEATURE IMAGE -->
                    <form  method="POST" action="<?php echo base_url();?>register/complete_register" id="my-payment-form" class="form  wow fadeInLeft animated" >
	                    <div class="col-md-12 col-sm-12 col-xs-12"> 
	                        	<div class="home-feature center-block wow bounceIn user-type" data-wow-duration="1s" data-wow-delay="1s">
	                           
									<!-- <div class="header header-primary text-center">				
										<div class="social-line">										
										</div>
									</div> -->
									<div class="content">
										<div class="input-group">
												
											<p><?php if (count($error)>0) { foreach ($error as $key => $value) {
														echo $value.".";
													} }?></p>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										
										<div class="content">
											<div class="form-group">
												
												<input type="text" class="form-control" placeholder="Your Username..." name="username" required autocomplete="off">
											</div>

											<div class="form-group">
												
												<input type="email" class="form-control" placeholder="Email..." name="email" required autocomplete="off">
											</div>

											<div class="form-group">
												
												<input type="password" placeholder="Password..." autocomplete="off" class="form-control" name="password" required />
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="content">
											<div class="form-group">
												
												<select class="form-control" name="type"  placeholder="chose your type" id="type_chose">
											
													<option value="basic" <?php if ($plan=="basic"||$plan=="") echo 'selected'?>>Basic</option>
													<option value="pro" <?php if ($plan=="pro") echo 'selected'?>>Pro($49)</option>
													<option value="premium" <?php if ($plan=="premium") echo 'selected'?>>Premium($99)</option>
												</select>
											</div>
											<div style="display: none;" id="premium_pay">
												<div class="form-group">
													
													<input type="text" class="form-control" placeholder="Name on Card..." name="cartname" data-worldpay="name" id="cartname"  >
													
												</div>
												<div class="form-group">
													
													<input type="text" class="form-control" placeholder="Card Number... xxxx xxxx xxxx xxxx"  size="20" data-worldpay="number" name="cardnumber" id="cartnumber" >
													
												</div>
												<div class="form-group">
													
													<input type="text" class="form-control" placeholder="CVC Number..." id="cvc" size="4" 	data-worldpay="cvc" name="cvc"  data-toggle="tooltip" title="It is a 3 digit number on the back of your card !" >											
												</div>
												
												<div class="form-group">
													
													
													<div class="form-group-addon">
														<span >Expiry Date : </span>
														<select id="expiration-month" data-worldpay="exp-month" name="expiration-month" class="valid" aria-invalid="false" >
													        <option value="01">01</option>
													        <option value="02">02</option>
													        <option value="03">03</option>
													        <option value="04">04</option>
													        <option value="05">05</option>
													        <option value="06">06</option>
													        <option value="07">07</option>
													        <option value="08">08</option>
													        <option value="09">09</option>
													        <option value="10" selected="selected">10</option>
													        <option value="11">11</option>
													        <option value="12" selected="">12</option>
													    </select>
													    <span> / </span>
													    <select id="expiration-year" data-worldpay="exp-year" name="expiration-year">
													        <option value="2017" selected="selected">2017</option>								       
													        <option value="2018">2018</option>
													        <option value="2019">2019</option>
													        <option value="2020">2020</option>
													        <option value="2021">2021</option>
													        <option value="2022">2022</option>
													        <option value="2023">2023</option>				
													    </select>
												    </div>										
												</div>
											</div>										
										</div>
									</div>
	                        	</div>
	                        	<div class="col-md-12 col-sm-12">
	                        		<label></label>
	                        	</div>
		                        <div class="col-md-12 col-sm-12">
		                        	<div class="footer text-center">
											<input type="submit" name="register" class="btn btn-simple btn-primary btn-lg" value="REGISTER" id="register">
											
									</div>
		                        </div>	                        
	                    </div>
                    </form>
                    <!-- END HOME FEATURE IMAGE -->
                    <!-- END HOME CONTENT -->
                </div>
            </div>
        </div>
    </div>
    <!-- END HOME -->
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
	<script src="<?=base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?=base_url()?>assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?=base_url()?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?=base_url()?>assets/js/material-kit.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		function show_premium(){
			document.getElementById("premium_pay").style.display  = "block";
			document.getElementById("cartname").setAttribute("required", "required");
			document.getElementById("cartnumber").setAttribute("required", "required");
			document.getElementById("cvc").setAttribute("required", "required");
			document.getElementById("expiration-year").setAttribute("required", "required");
			document.getElementById("expiration-month").setAttribute("required", "required");
		}
		function hide_premium(){
			document.getElementById("premium_pay").style.display  = "none";
			document.getElementById("cartname").removeAttribute("required");
			document.getElementById("cartnumber").removeAttribute("required");
			document.getElementById("cvc").removeAttribute("required");
			document.getElementById("expiration-year").removeAttribute("required");
			document.getElementById("expiration-month").removeAttribute("required");
		}
		var type_acount = document.getElementById('type_chose').value;
		if (document.getElementById('type_chose').value=='premium'||document.getElementById('type_chose').value=='pro'){
			show_premium();
		}
		else {
			hide_premium();
		}
		document.getElementById('type_chose').onchange = function(){			
			if (document.getElementById("type_chose").value =='premium'||document.getElementById("type_chose").value =='pro'){
				show_premium();
			}
			else {
				hide_premium();
			}
		}
		document.getElementById("register").onclick = function(){

		    var form = document.getElementById('my-payment-form');
		    if (document.getElementById("type_chose").value =='premium'){
			    Worldpay.useOwnForm({

			        'clientKey': 'T_C_f9a143d3-9a4c-494f-8d65-aa60fe7427c4',

			        'form': form,

			        'reusable': false,

			        'callback': function(status, response) {

			          	document.getElementById('payment-errors').innerHTML = '';

			          	if (response.error) {             

			            //Worldpay.handleError(form, document.getElementById('payment-errors'), response.error); 

			          	} else {
			            	var token = response.token;
			            	Worldpay.formBuilder(form, 'input', 'hidden', 'token', token);
			            	form.submit();
			          	}
			        }
			      });
			}
		  };
	</script>
</html>
