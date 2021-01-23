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
    <h1>Welcome <?php if (isset($_SESSION['setup'])){ echo $_SESSION['setup']; }?> <strong><?php  echo $_SESSION['username'];?></strong>!</h1>
<?php  if (!isset($_SESSION['setup'])){ ?> <!-- First time user? -->
		<div style="background-color: #313443;" align="center">
    		<h5 style="margin-left: 5px;">IF YOU ALREADY COMPLETED THIS FORM PLEASE GO TO DASHBOARD</h5><button style="margin-left: 5px; margin-bottom: 5px;" id="join-btn"><a href="dashboard.php" style="color: white">Dashboard</a></button>
    	</div>
    	<p align="justify">Let's get you started with the application. First things first, we need you to fill up the form below. The data below will be used by Sindi to recommend you music, videos you like and get to know you more. If you want to edit your data later please refer to the settings tab on the left navigation bar.<br><b>NOTE: This data will be available only to your local environment and will not be uploaded to the cloud.</b></p>
    	
    	<form action="" method="POST" name="signupform">
		    <h2>Credentials</h2><br>
		    <ul class="noBullet">
		      <li>
		        <label for="name">How do you want me to call you?</label><br>
		        <input type="text" class="inputFields" id="name" name="name" placeholder="Name" required/>
		      </li>
		      <li>
		        <label for="surname">And also your surname.</label><br>
		        <input type="text" class="inputFields" id="surname" name="surname" placeholder="Surname" required/>
		      </li>
		      <li>
		        <label for="age">When were you born?</label><br>
		        <input type="date" class="inputFields" id="date" name="date" placeholder="Birth Date" required/>
		      </li>
		      
		      <h3> <img src="img/facehash.png" width="5%"> FaceHash</h3>
		      <li>
		        <label for="facehash">Carefully write your FaceHash.</label><br>
		        <input type="text" class="inputFields" id="facehash" name="facehash" placeholder="FaceHash" required/>
		      </li>
		      <h3>Preferences</h3>
		      <h4>1. What genre of music do you like?</h4>
		      <li>
		      	<input id="music1" name="music[]"  value="rock" type="checkbox" >
			    <label for="music1">Rock </label>
			    <input id="music2" name="music[]" value="edm" type="checkbox" >
			    <label for="music2">EDM </label>
			    <input id="music3" name="music[]" value="soul" type="checkbox" >
			    <label for="music3">Soul/R&B </label>
			    <input id="music4" name="music[]" value="funk" type="checkbox" >
			    <label for="music4">Funk </label>
			    <input id="music5" name="music[]" value="country" type="checkbox" >
			    <label for="music5">Country </label>
			    <input id="music6" name="music[]" value="latin" type="checkbox" >
			    <label for="music6">Latin </label>
			    <input id="music7" name="music[]" value="reggae" type="checkbox" >
			    <label for="music7">Reggae </label>
			    <input id="music8" name="music[]" value="hiphop" type="checkbox" >
			    <label for="music8">Hip Hop </label>
			    <input id="music9" name="music[]" value="kpop" type="checkbox" >
			    <label for="music9">K-pop </label>
		      </li>
		      <br>
		      <h4>2. What genre of movies do you watch?</h4>
		      <li>
		      	<input id="movie1" name="movie[]" value="action" type="checkbox" >
			    <label for="movie1">Action </label>
			    <input id="movie2" name="movie[]" value="comedy" type="checkbox" >
			    <label for="movie2">Comedy </label>
			    <input id="movie3" name="movie[]" value="drama" type="checkbox" >
			    <label for="movie3">Drama </label>
			    <input id="movie4" name="movie[]" value="fantasy" type="checkbox" >
			    <label for="movie4">Fantasy </label>
			    <input id="movie5" name="movie[]" value="horror" type="checkbox" >
			    <label for="movie5">Horror </label>
			    <input id="movie6" name="movie[]" value="mystery" type="checkbox" >
			    <label for="movie6">Mystery </label>
			    <input id="movie7" name="movie[]" value="romance" type="checkbox" >
			    <label for="movie7">Romance </label>
			    <input id="movie8" name="movie[]" value="thriller" type="checkbox" >
			    <label for="movie8">Thriller </label>
			    <input id="movie9" name="movie[]" value="western" type="checkbox" >
			    <label for="movie9">Western </label>
		      </li>
		      <br>
		      <h4>BETA features</h4>
		      <h6>Run face_recognition to detect face expressions.</h6><input id="beta1" name="beta1" type="checkbox" value="yes" class="switch" ><br>
		      <h6>Activate face authentication. (requires face_recognition)</h6><input id="beta2" name="beta2" type="checkbox" value="yes" class="switch" ><br>
		      <h6>Save my data on the cloud when I log out.</h6><input id="beta3" name="beta3" type="checkbox" value="yes" class="switch" >

		      <li id="center-btn">
		        <input type="submit" id="join-btn" name="submit" alt="Finish" value="Finish" onclick="on_submit()">

<?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
          
        function get_data() { 
        	$music=$_POST['music'];  
				$choosed_music="";  
				foreach($music as $chk1)  
				   {  
				      $choosed_music .= $chk1.",";  
				   }  

			$movies=$_POST['movie'];  
				$choosed_movies="";  
				foreach($movies as $chk2)  
				   {  
				      $choosed_movies .= $chk2.",";  
				   }  
			if(empty($_POST['beta1'])){
				$beta1 = "no";
			}
			if(!empty($_POST['beta1'])){
				$beta1 = $_POST['beta1'];
			}

			if(empty($_POST['beta2'])){
				$beta2 = "no";
			}
			if(!empty($_POST['beta2'])){
				$beta2 = $_POST['beta2'];
			}

			if(empty($_POST['beta3'])){
				$beta3 = "no";
			}
			if(!empty($_POST['beta3'])){
				$beta3 = $_POST['beta3'];
			}

			# In case they are left empty, because it gave error of undefined index.
            $datae = array(); 
            $datae[] = array( 
                'Name' => $_POST['name'], 
                'Surname' => $_POST['surname'], 
                'Birthday' => $_POST['date'],
                'FaceHash' => $_POST['facehash'],
                'Music' => $choosed_music, 
                'Movies' => $choosed_movies,
                'Beta1' => $beta1,
                'Beta2' => $beta2,
                'Beta3' => $beta3,
            ); 
            return json_encode($datae); 
        } 
          
        $name = $_POST['facehash']; 
        $file_name = 'users/data/' . $name . '.json'; 
       
        if(file_put_contents( 
            "$file_name", get_data())) { 
                $_SESSION['setup'] = "back";
                ?>
                <h1>Your data has been stored successfuly. To edit your data later, you can head over to settings tab.</h1><br><button id="join-btn"><a style="color: white" href="dashboard.php">Dashboard</a></button>
                <?php
            } 
        else { 
            echo "Sorry, your data wasn't stored!"; 
        } 
    } 
?>

		      </li>
		    </ul>
		  </form>
		  <br>

<?php } 
if(isset($_SESSION['setup'])){?>
<h4>~ Here is a video to get you started ~</h4>
<!-- Tutorial video section -->



<?php } ?>
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

  
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>  -->

</body>
</html>
