<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="baseURL" content="{{ url('/') }}">

	<style type="text/css">
		
		.show{
			display: block!important;
		}

	</style>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('public/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('public/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('public/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('public/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('public/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('public/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('public/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('public/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('public/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('public/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo url('public/images/bg-01.jpg') ?> ');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action="javascript:;" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					<a href="javascript:;" id="facebookLogin" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="javascript:;" id="googleLogin" class="btn-google m-b-20">
						<img src="{{ url('public/images/icons/icon-google.png')}}" alt="GOOGLE">
						Google
					</a>

					<a href="javascript:;" id="phoneAuth" class="btn-google m-b-20">
						<img src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/phone-512.png" alt="PHONE">
						Phone
					</a>
					
					<div class="p-t-31 p-b-9 cstm-div phone-div">
						<span class="txt1">
							Phone Number <span style="font-size: 10px;">(include country code eg:+91)</span>
						</span>
					</div>
					<div class="wrap-input100 validate-input phone-div" data-validate = "Username is required">
						<input class="input100" type="text" name="phone_number" >
						<span class="focus-input100"></span>
					</div>

					<div id="recaptcha-container" style="margin-top: 10px"></div>

					<div class="p-t-31 p-b-9 cstm-div otp-div" >
						<span class="txt1">
							OTP  
						</span>
					</div>
					<div class="wrap-input100 validate-input otp-div" data-validate = "Username is required">
						<input class="input100"  type="text" name="verify_otp" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-17 phone-div">
						<button class="login100-form-btn sendOTP">
							Send OTP
						</button>
					</div>

					<div class="container-login100-form-btn m-t-17 otp-div">
						<button type="button" id="verifyOTP" class="login100-form-btn">
							Verify OPT
						</button>
					</div>

					<!-- <div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="#" class="txt2 bo1">
							Sign up now
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ url('public/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('public/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('public/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ url('public/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('public/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('public/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ url('public/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('public/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ url('public/js/main.js')}}"></script>


	<!-- Firebase files -->
	<!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

	<!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>

	<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>

	<!-- Add Firebase products that you want to use -->
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-firestore.js"></script>

	<script type="text/javascript" src="{{ url('public/js/firebase-conf.js') }}"></script>

	<!-- facebook provider -->
	<script type="text/javascript" src="{{ url('public/js/facebook.js') }}"></script>
	

	<!-- google provider -->
	<script type="text/javascript" src="{{ url('public/js/google.js') }}"></script>

	<!-- phone number -->
	<script type="text/javascript" src="{{ url('public/js/phone.js') }}"></script>

</body>
</html>