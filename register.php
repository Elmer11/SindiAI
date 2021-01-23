<?php include('server.php') ?>
<!DOCTYPE html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product">
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

  <!-- Stylesheets /-->
  <link rel="stylesheet" href="css/gumby.css">   			<!-- Gumby Framework /-->
  <link rel="stylesheet" href="css/style.css">   			<!-- Main stylesheet /-->
  <link rel="stylesheet" href="css/animate.css"> 			<!-- Animations /-->
  <link rel="stylesheet" href="dist/css/ckin.css">          <!-- Video Player /-->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
  <script src="js/modernizr-2.6.2.min.js"></script>  <!-- Modernizr /-->
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <link rel="stylesheet" type="text/css" href="css/captcha.css">
  
</head>


<body>

<!-- Loading -->

<div id="preloader">   		
<div id="loading-animation">&nbsp;</div>
</div>


<!-- NAVIGATION ############################################### -->


		<div class="cbp-af-header">
		
			<nav >
				
				 <!-- Logo -->
			
				 <div id="logo">
				 
				 	<a href="index.html"><img alt="Logo" src="img/logo.png"></a>
				 	
				 </div>
				
				 <!-- Links -->
				
				 <ul id="nav" >
				 
					 <li><a href="login.php">Log in</a></li>
					 
				 </ul>
				 			 
			</nav>

		
		</div> 

<!-- END NAVIGATION ############################################### -->


<!-- HEADER / FIRST SECTION ############################################### -->


<section class="page1">    
    <div class="huge-title centered">  
		<div class="signupSection">
		  <div class="info">
		    <h2>Sindi AI</h2>
		    <img class="icon ion-ios-ionic-outline" src="img/1.png"> 
		    <?php include('errors.php'); ?>
		  </div>
		  <form  onsubmit="return checkform(this);" action="register.php" method="POST" class="signupForm" name="signupform">
		    <h2>Register</h2>
		    <ul class="noBullet">
		      <li>
		        <label for="username"></label>
		        <input type="text" class="inputFields" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>" oninput="return userNameValidation(this.value)" required/>
		      </li>
		      <li>
		        <label for="password_1"></label>
		        <input type="password" class="inputFields" id="password_1" name="password_1" placeholder="Password" oninput="return passwordValidation(this.value)" required/>
		      </li>
		      <li>
		        <label for="password2"></label>
		        <input type="password" class="inputFields" id="password_2" name="password_2" placeholder="Repeat the password" oninput="return passwordValidation(this.value)" required/>
		      </li>
		      <li>
		        <label for="email"></label>
		        <input type="email" class="inputFields" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required/>
		      </li>
		      <li>
		        <div class="capbox">
					<div id="CaptchaDiv"></div>
						<div class="capbox-inner">
						Type the number:<br>
						<input type="hidden" id="txtCaptcha">
						<input type="text" name="CaptchaInput" id="CaptchaInput" size="15">
					</div>
				</div>
		      </li>
		      <li id="center-btn">
		        <input type="submit" id="join-btn" name="reg_user" alt="Next" value="Next">
		      </li>
		    </ul>
		  </form>
		</div>
	    </div>
</section>



<!-- FOOTER SECTION ############################################### -->


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


<!-- END FOOTER SECTION ############################################### -->

</div> <!-- end of container -->


  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
  
  <script src="js/main.js" type="text/javascript"></script> 								<!-- Main Javascript File -->
  <script src="js/classie.js" type="text/javascript"></script> 								<!-- Scroll from left & right -->
  <script src="js/waypoints.min.js" type="text/javascript"></script>						<!-- Waypoints -->
  <script src="js/jquery.scrollto.js" type="text/javascript"></script> 						<!-- ScrollTo -->	
  <script src="js/mediaCheck.js" type="text/javascript"></script> 							<!-- MediaCheck -->	
  <script src="dist/js/ckin.js"></script>													<!-- Video Player -->
  <script src="js/form.js" type="text/javascript"></script>
  <script src="js/captcha.js" type="text/javascript"></script>
  
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>  -->

  </body>
  
</html>