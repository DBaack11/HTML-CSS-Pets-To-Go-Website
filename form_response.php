<!DOCTYPE html>
<html>
<head>

<!-- 
	Devin Baack
	May 4th, 2021
	WDV 101: HTML/CSS
	Final Project: Pets To Go Website
-->

	<?php
		$process_message = "";
		$image = null;
		if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["message"])){
			$process_message = "Error! Please complete all fields!";
			$image = "images/error.png";
		} else{
			$process_message = "Form Successfully Processed!";
			$image = "images/success.png";
		}
	?>

	<title>Contact Form Proccess</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css_stylesheet.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta keywords="pets, dogs, cats, pets to go, rescue, animals, contact">
	<meta description="This page displays the results of the processed contact form.">
</head>

<a name="top"></a>

<body>

	<div class="header-flex">
		<img src="images/cats_and_dogs_peeking.png" alt="Dogs and Cats Header"  style="margin-top: 30px;">
	<header>
		  <h1 class="h1-flex">Pets To Go</h1>
	</header>

	</div>

	<nav class="nav">
		<a href="index.html">Home</a>
		<a href="about.html">About PTG</a>
		<a href="our_pets.html">Our Pets</a>
		<a href="gallery.html">Gallery</a>
		<a href="contact.html">Contact Us</a>
	</nav>

	<main class="row">

		<div class="leftcolumn" style="width: 60%;">

		    <div class="card">
		    	
		    	<center><img src="<?php echo $image;?>" width="200px" height="200px" style="margin: 0.5em;"></center>
		    	<br>
		    	<h1 style="font-size: 40px;"><?php echo $process_message;?></h1>

		    </div>

		   

		</div>

		<div class="rightcolumn" style="width: 40%">

		 	<div class="card" style="word-wrap: normal;">
		    	<p>
		    	<h3>First Name: <?php echo $_POST["firstname"]; ?></h3>
		    	<h3>Last Name: <?php echo $_POST["lastname"]; ?></h3>
		    	<h3>Email: <?php echo $_POST["email"]; ?></h3>
		    	<h3>Phone Number: <?php echo $_POST["phone"]; ?></h3>
		    	<h3>Message: <?php echo $_POST["message"]; ?></h3>
		    	</p>
		    </div>
		</div>
	</main>

		<footer class="footer">
		<section>
			<br>
			  <a href="#top" class="click button" style=" margin-bottom: 2em;">Top Of Page</a>
			  <br>
			  <br>
				  <p>Click below to learn more about what you can do to help vulnerable animals.</p>
				  <a href="https://www.aspca.org/" target="_blank" class="click button">ASCPA.org</a>
				  <br>
		  </section>  

			<br>
		 <a href="index.html"><img src="images/frenchie.png" style="margin-top: 1em; margin-bottom: 1em;"></a>
		 <br>
	</footer>


</body>
</html>


