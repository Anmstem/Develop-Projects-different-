<?php
include_once 'inc/session.php';
require_once 'inc/db.php';
require_once 'conf/settings.php';
?>
<?php

include_once 'inc/menu.php';
?>

<html>
<head>
	<link href="conf/style.css" rel="stylesheet"/>

	<meta charset="utf-8">
	<title>Contact</title>

	<style>
		@font-face {
    font-family: Montserrat-ExtraLight; 
    src: url(fonts/Montserrat-ExtraLight.otf); 

   }
   p, a {
    font-family: Montserrat-ExtraLight;
   }
	</style>
</head>
<body>
<div class="header">
	<header> <img src="images/mozi2.png"> </header>
	</div>
	<div class="reglog"> 
	<a>  </a> 
	</div>
	<hr>
<div class="topnav">
   <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="cars.php">Cars</a>
  <a href="news.php">News</a>
</div>
<hr>
<div id="mainSection">
<section>
<div class="container">

  
<form action="" name="register" method="POST">
<br />
<p>*First Name:<input type="text" name="f_name" placeholder="Your name..." required /><br /></p>
<p>*Last Name:<input type="text" name="l_name" placeholder="Your last name..." required /><br /></p>
<p>*Email:<input type="text" name="email" placeholder="Your email..." required /><br /></p>
<p>*Country:<input type="text" name="country" placeholder="Your country..." /><br /></p>
<p>*Subject:<input type="textarea" name="subject" style="height:200px; width:100%;" /> <br /></p>
<br /> <input type="submit" name="submit" value="Send" onclick="confirm('Do you confirm the correctness of your data entered?')"/>
</form>

</div>

   </section>
</div>


<div class="footer">
	<hr>
<div class="topnav">
  <a href="index.html">Home</a>
  <a href="about.html">About</a>
  <a href="gallery.html">Gallery</a>
  <a href="news.html">News</a>
 
</div>
<hr>
	<footer> 

<a target="_blank" href="https://www.instagram.com/anmstem/"><img src="images/inst.png"></a>
<a target="_blank" href="https://vk.com/id57651763"><img src="images/vk.png"></a>
<a target="_blank" href="https://www.youtube.com/channel/UCJ89s9pUA8e7adboD8zVtFg"><img src="images/yt.png"></a>
		
	  </footer>
	  <div class="cont"><p id="p3">  Moskow, Russia <br> Saint Petersburg, Russia </p> <p id="p4"> <a>Contact Us</a> <br> Phone: +XXXXXXXXXX; +XXXXXXXXXX </p></div>
</div>
<script src="JS/main.js"></script>
<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['f_name']) && (isset($_POST['l_name'])))
	{
		
		$f_name = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['f_name']));
		$l_name = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['l_name']));
		$email = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['email']));
		$country = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['country']));
		$subject = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['subject']));
		
		$query = "INSERT INTO `contact_us`(`first_name`, `last_name`, `email`, `country`, `subject`) 
		VALUES ('$f_name','$l_name','$email','$country','$subject')";
		$insert = mysqli_query($connect, $query);
		
		if($insert)
		{
			echo 'Inserted'; 
		}
		else
		{
			echo 'Error';
		}
	}
}
?>
</body>
</html>

