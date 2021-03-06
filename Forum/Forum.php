<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>

<title>Apitong's Food & Catering Services</title>
<meta charset ="utf-8">
<link rel="stylesheet" type="text/css" href="main.html">

</head>

<body>

<!-- Navbar  -->
					
<nav class="shift navbar sticky-top navbar-expand-lg">
<div class="container-fluid">
  <a class="navbar-brand" href="HomePage.html">
<img src ="apitonglogo.png" class="img-responsive logo">
</a>



  <button class="navbar-toggler mr-left custom-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
>			<span class="navbar-toggler-icon"></span>
            </button>




            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                   
					<li class="nav-item nav-a">
                        <a class="nav-link" href="../HomePage/HomePage.html">Home</a>
                    </li>

                    <li class="nav-item nav-a">
                        <a class="nav-link" href="../Packages/Packages.html">Packages</a>
                    </li>

                    <li class="nav-item nav-a">
                        <a class="nav-link" href="../About/About.html">About Us</a>
                    </li>



					
                <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
					

					<div class="input-group">
						<a href="../Logout.html"><button name="submit" class="btn">Logout</button></a>
	
					</div>


</nav>
<div class="forumtxt">
	<h1>FORUMS</h1>
	<p>Welcome to the FORUMS page of Apitong's Food & Catering Services.</p>
</div>

<?php
	echo
		"<form method='POST' action='".setComments($conn)."'>
		<input type='hidden' name='uid' value='Apitong Fan'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'><br>
		<textarea name='message'></textarea><br>
		<button type='submit' name='commentSubmit' class='cmtbtn'>Comment</button>
		</form>";

		getComments($conn)
?>



<!-- Footer  -->
<div class="global">
	<div class="curve"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-md-3">
					<h6>Legal</h6>
				<ul >
					<li><a href="../TermsConditions/TermsCondition.php">Terms & Conditions</a></li>
					<li><a href="../PrivacyPolicy/PrivacyPolicy.php">Privacy Policy</a></li>
					<li><a href="../Forum/Forum.php">Forums</a></li>
				</ul>
			  </div>
				<div class="col-md-6 col-md-3">
					<h6>Support</h6>
				<ul >
					<li>Phone Number: +639178883334</li>
					<li>Landline: 394-7896<li>
					<li>Email: apitongscatering@business.com</li>
				</ul>
			  </div>
			
				<div class="social">
					<a href="https://www.facebook.com/Dirtysoda11"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/RAVEN75754452?s=09"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/algeralddelapaz/"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-snapchat-ghost"></i></a>
			  </div>
		  </div>
				<p class="copyright"> &copy; Apitongs Food & Catering Services. All Rights Reserved</p>
			  </div>
		  </div>
			


<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
crossorigin="anonymous"></script>

<script src="main.js"></script>

</body>

</html>