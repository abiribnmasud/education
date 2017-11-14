<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zcube.in/elearning/teacher.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2017 15:31:08 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="assets/img/ficon.png">
	<!-- Standard -->
	<link rel="shortcut icon" href="img/ficon.html">
	<!-- Bootstrap Core CSS -->
	
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
	<!-- Dropdownhover CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-dropdownhover.min.css" type="text/css">
	<!-- fonts awesome -->
	<link rel="stylesheet" href="assets/font/css/font-awesome.min.css" type="text/css">
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<!-- Owl Carousel Assets -->
	<link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">
	
</head>

<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="loading">
		</div>
	</div>
	<header class="insid-header">
		<!-- top-menu -->
		<div class="top-menu">
			<!-- top-header -->
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<div class="social">
								<ul><li><a href="login-student.html">Student Log In</a></li>
									<li>|</li>
									<li><a href="{{ route("studentSignupView") }}">Student Sign up</a></li>
									<li>|</li>
									<li><a href="login-teacher.html">Teacher Log In</a></li>
									<li>|</li>
									<li><a href="{{ route("teacherSignupView") }}">Teacher Sign up</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /top-header -->
		</div>
		<!-- /top-menu -->
		<!-- mainNav -->
			<div id="mainNav" class="navbar-fixed-top">
				<div class="container">
					<div class="row">
						<nav class="navbar navbar-inverse navbar-default">

							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="logo"/></a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
								<ul class="nav navbar-nav">
									<li>
										<a href="index-2.html">Home</a>										
									</li>
									<li>
										<a href="about.html">About Us</a>										
									</li>
									<li>
										<a href="contact.html"><span>Contact</span></a>
									</li>
								</ul>
								<!-- /.navbar-collapse -->
							</div>

						</nav>
					</div>
				</div>


			</div>
			<!-- /mainNav -->
	</header>
	<section class="courses" style="margin-top:100px">			
		<!-- .courses -->
		<div class="container">
			<div class="row">		
				<div class="sign-up-outer">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="our-course">
						
						
						
						<form name="ajax-form" id="contact-form2" action="{{ route('teacherSignup') }}" method="post" class="contact-form">
						
							{{ csrf_field() }}

							<div class="col-sm-12 col-md-12">
								<h2>Create an Account</h2>
							</div>
							<div class="col-sm-12 col-md-12 author">
								<input id="name" name="iName" required="" placeholder="Teacher Name" type="text">
							</div>
							<div class="col-sm-12 col-md-12 email">
								<input id="email" name="email" required="" placeholder="Email" type="email">
							</div>
							<div class="col-sm-12 col-md-12 email">
								<input id="password" name="password" required="" placeholder="Password" type="password">
							</div>
						    <div class="col-sm-12 col-md-12 email">
								<input id="password" name="cPassword" required="" placeholder="comfirm Password" type="password">
							</div>
							<div class="col-sm-12 col-md-12 text-center">
								<input name="submit" value="Submit" id="send" type="submit">
							</div>
							<div class="col-sm-12 col-md-12">
								<span>Already have an account? <a href="#">Sign In</a></span>
							</div>
						</form>
					
					
					
					
					</div>
				</div>				
				</div>	
			</div>
		</div>
		<!-- /.courses -->
	</section>
	<!-- jQuery -->
	<script src="assets/js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-dropdownhover.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/jquery.fittext.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/modernizr.html"></script>
	<!-- Modernizr -->
	<script src="assets/js/main.html"></script>
	<!-- Resource jQuery -->
	<!--  countTo JavaScript  -->
	<script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
	<!-- owl carousel -->
	<script src="assets/owl-carousel/owl.carousel.js"></script>
	<!--  Custom Theme JavaScript  -->
	<script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from zcube.in/elearning/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2017 15:31:07 GMT -->
</html>