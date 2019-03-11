<!DOCTYPE html>
<html lang="eng" data-ng-app="DentalClinicApp">

<head>
	<title>Dental Clinic</title>
	<meta charset="utf-8">

	<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
	<!-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js"></script> -->

	<div class="wrapper row0">
		<div id="topbar" class="hoc clear"> 
			<div class="fl_left">
				<ul class="nospace">
					<li><a href="index.php"><i class="fas fa-home fa-lg"></i></a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
				</ul>
			</div>
			<div class="fl_right">
				<ul class="nospace">
					<li><i class="fas fa-phone rgtspace-5"></i> +8801683174077</li>
					<li><i class="fas fa-envelope rgtspace-5"></i>shaheenkader151@gmail.com</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wrapper row1">
		<header id="header" class="hoc clear"> 
			<div id="logo" class="one_half first">
				<img src="">
				<h1 class="logoname"><img  style="height:100px;width:150px;"  src="images/demo/logo.jpg"></h1>
			</div>
			<div class="one_half">
				<ul class="nospace clear">
					<li class="one_half first">
						<div class="block clear"><i class="fas fa-phone"></i> <span><strong class="block">Call Us:</strong> +8801724561088</span> </div>
					</li>
					<li class="one_half">
						<div class="block clear"><i class="far fa-clock"></i> <span><strong class="block"> Sat - Thu </strong> 09.00am - 06.00pm</span> </div>
					</li>
				</ul>
			</div>
		</header>
		<nav id="mainav" class="hoc clear"> 
			<ul class="clear">
				<li class="active"><a ui-sref="home">Home</a></li>
				<li><a ui-sref="home">Motive</a></li>
				<li><a class="drop" href="#">Treatments</a></li>
				<ul>
					<li><a href="gallery.php">Gallery</a></li>
				</ul>
				<li><a href="login.php">Appointment</a></li>
				<li><a ui-sref="dentist">Dentists</a></li>        
				<li><a ui-sref="location">Location</a></li>			
			</ul>
		</nav>
	</div>


	<!-- <pre>@{{notificationSubmitData | json}}</pre> -->

	<!-- Footer -->
	<div class="wrapper row5">
		<div id="copyright" class="hoc clear"> <br>
			<p class="fl_middle">Copyright </p>
		</div>
	</div>
</head>


<body>


	<!-- JAVASCRIPTS -->

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> -->
    <script src="ng-assets/js/jquery.min.js" type="text/javascript"></script>
    <!-- <script src="http://d3ribb8sgves29.cloudfront.net/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script> -->
    <script src="ng-assets/js/angular.min.js" type="text/javascript"></script>
    <!-- <script src="http://d3ribb8sgves29.cloudfront.net/assets/global/plugins/angularjs/angular-sanitize.min.js" type="text/javascript"></script> -->
    <script src="ng-assets/js/angular-ui-router.min.js" type="text/javascript"></script>
    <script src="ng-assets/js/ocLazyLoad.min.js" type="text/javascript"></script>
    <!-- <script src="ng-assets/js/angular.min.js"></script> -->
    <!-- <script src="ng-assets/js/ocLazyLoad.min.js"></script> -->
    <script src="ng-assets/js/main.js" type="text/javascript"></script>
    <script src="ng-assets/js/routes.js" type="text/javascript"></script>


</body>
</html>