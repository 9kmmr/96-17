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
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

</head>
<body class="signup-page">

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('assets/img/bg.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="POST" action="<?php echo base_url();?>login" id="login-form" >
								<div class="header header-primary text-center">
									<h4>Login</h4>
									<div class="social-line">
										
									</div>
								</div>

								<div>
									<?php if (isset($error)) {
										$error;
									} ?>
								</div>
								
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<input type="email" class="form-control" placeholder="Your Email..." name="email" required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											
										</span>
										<input type="password" placeholder="Password..." autocomplete="off" class="form-control" name="password" required />
									</div>

								</div>
								<div class="footer text-center">
									<input type="submit" name="login" class="btn btn-simple btn-primary btn-lg" value="LOGIN" id="login">
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

    </div>


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
		if (document.getElementById('type_chose').value=='premium'){
			show_premium();
		}
		else {
			hide_premium();
		}
		document.getElementById('type_chose').onchange = function(){			
			if (document.getElementById("type_chose").value =='premium'){
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
