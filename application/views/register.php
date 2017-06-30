
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
    <link href="<?=base_url()?>assets/css/material-kit.css" rel="stylesheet"/>

</head>
<body class="signup-page">

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('<?=base_url()?>assets/img/bg.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="POST" action="<?php echo base_url();?>register/complete_register" id="my-payment-form" >
								<div class="header header-primary text-center">
									<h3>Sign Up</h3>
									<div class="social-line">
										
									</div>
								</div>
								<div class="content">
								<div class="input-group">
									<span class="input-group-addon"></span>
									<p><?php if (count($error)>0) { foreach ($error as $key => $value) {
											echo $value.".";
										} }?></p>
								</div>
								</div>
								<div class="content">
									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<input type="text" class="form-control" placeholder="Your Username..." name="username" required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<input type="email" class="form-control" placeholder="Email..." name="email" required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<input type="password" placeholder="Password..." autocomplete="off" class="form-control" name="password" required />
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<select class="form-control" name="type"  placeholder="chose your type" id="type_chose">

											<option value="normal" <?php if ($plan=="") echo 'selected'?>>Chose your type</option>
											<option value="basic" <?php if ($plan=="basic") echo 'selected'?>>Basic</option>
											<option value="pro" <?php if ($plan=="pro") echo 'selected'?>>Pro($49)</option>
											<option value="premium" <?php if ($plan=="premium") echo 'selected'?>>Premium($99)</option>
										</select>
									</div>
									<div style="display: none;" id="premium_pay">
										<div class="input-group">
											<span class="input-group-addon">
												
											</span>
											<input type="text" class="form-control" placeholder="Name on Card..." name="cartname" data-worldpay="name" id="cartname"  >
											
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												
											</span>
											<input type="text" class="form-control" placeholder="Card Number..."  size="20" data-worldpay="number" name="cardnumber" id="cartnumber" >
											
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												
											</span>
											<input type="text" class="form-control" placeholder="CVC Number..." id="cvc" size="4" 	data-worldpay="cvc" name="cvc"  data-toggle="tooltip" title="It is a 3 digit number on the back of your card !" >											
										</div>
										
										<div class="input-group">
											<span class="input-group-addon">
												
											</span>
											<span class="input-group-addon">Expiry Date</span>
											<div class="input-group-addon">
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
									<!-- If you want to add a checkbox to this form, uncomment this code

									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> -->
								</div>
								<div class="footer text-center">
									<input type="submit" name="register" class="btn btn-simple btn-primary btn-lg" value="REGISTER" id="register">
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <nav class="pull-left">
						<ul>
							<li>
								<a href="">
									LAM
								</a>
							</li>
							<li>
								<a href="">
								   About Us
								</a>
							</li>
							<li>
								<a href="">
								   Blog
								</a>
							</li>
							<li>
								<a href="">
									Licenses
								</a>
							</li>
						</ul>
		            </nav>
		            <div class="copyright pull-right">
		                &copy; 2016, made with <i class="fa fa-heart heart"></i> by <a href="" target="_blank">LAM</a>
		            </div>
		        </div>
		    </footer>

		</div>

    </div>


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
