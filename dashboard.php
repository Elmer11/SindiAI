<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <!-- Meta tags & title -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>HomeBuddy</title>
  <meta name="description" content="Welcome to HomeBuddy! We offer free AI assistants with facial recognition systems." />
  <meta name="keywords" content="HomeBuddy, Sindi, AI Assistant, facial recognition, free AI assistant, opensource" />
  <meta name="author" content="HomeBuddy - Juled">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/navbar.css">
  <!-- Stylesheets /-->
  <link rel="stylesheet" href="css/gumby.css">   			<!-- Gumby Framework /-->
  <link rel="stylesheet" href="css/style.css">   			<!-- Main stylesheet /-->
  <link rel="stylesheet" href="css/animate.css"> 			<!-- Animations /-->
  <link rel="stylesheet" href="dist/css/ckin.css">          <!-- Video Player /-->
  <link rel="stylesheet" type="text/css" href="css/form.css">
  
  <script src="js/modernizr-2.6.2.min.js"></script>  <!-- Modernizr /-->
</head>
<body style="overflow: visible !important;">
<!-- Loader -->
<div id="preloader">   		
<div id="loading-animation">&nbsp;</div>
</div>

<!-- Side-Navbar --> 
<nav class="sidebar-navigation">
	<ul>
		<li>
			<a style="color: inherit; text-decoration: none;" href="dashboard.php"><i class="fa fa-hdd-o"></i></a>
			<span style="color: white !important;" class="tooltip">Dashboard</span>
		</li>
		<li>
			<a style="color: inherit; text-decoration: none;" href="#"><i class="fa fa-newspaper-o"></i></a>
			<span style="color: white !important;" class="tooltip">My Feed</span>
		</li>
		<li>
			<a style="color: inherit; text-decoration: none;" href="#"><i class="fa fa-sliders"></i></a>
			<span style="color: white !important;" class="tooltip">Settings</span>
		</li>
		<li style="vertical-align: bottom;">
			<a style="color: inherit; text-decoration: none;" href="#"><img src="img/deafultpp.png" style="height:50px;" alt="Not Found">
			<p style="color: white !important; text-align: center;"><?php echo $_SESSION['username'];?></p></a>
		</li>
		<li>
			<a style="color: inherit; text-decoration: none;" href="home.php?logout='1'"><i class="fa fa-sign-out"></i></a>
			<span style="color: white !important;" class="tooltip">Sign Out</span>
		</li>

	</ul>
</nav>
<div class="row" align="center">
    <h1>Hello <strong><?php  echo $_SESSION['username'];?></strong>, this is your dashboard!</h1>    
    <p>Here you can follow up your tasks, listen to music, watch videos, track your events and see how you're doing on your social accounts.</p>

</div>
<section class="footer">

		
		    <div class="row">
		    
		    	<!-- Article centered on the Page --> 
		
				<div class="nine columns centered">
				
					<!-- Nav Footer --> 
				
					<ul> 
						<li><a href="faq.html">FAQ</a> </li> 
						<li> <a href="#">Get the app</a> </li> 
						<li> <a href="#">Github</a> </li> 
					</ul>

					<!-- Title --> 
																
					<p class="copyright">© Copyright 2021 HomeBuddy. All rights reserved.</p>	
	
					<!-- Logo --> 
	
	
					<img class="logo" src="img/logo.png" alt="Logo">
	
				</div>
				
		
		    </div>
			

</section>
<script  src="js/navbar.js"></script>
  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
  
  <script src="js/main.js" type="text/javascript"></script> 								<!-- Main Javascript File -->
  <script src="js/classie.js" type="text/javascript"></script> 								<!-- Scroll from left & right -->
  <script src="js/waypoints.min.js" type="text/javascript"></script>						<!-- Waypoints -->
  <script src="js/jquery.scrollto.js" type="text/javascript"></script> 						<!-- ScrollTo -->	
  <script src="js/mediaCheck.js" type="text/javascript"></script> 							<!-- MediaCheck -->	
  <script src="dist/js/ckin.js"></script>													<!-- Video Player -->
  <script src="js/circle.js" type="text/javascript"></script>
  
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>  -->

</body>
</html>
