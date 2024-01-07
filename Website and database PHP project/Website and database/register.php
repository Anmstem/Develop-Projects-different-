<?php
include_once 'inc/session.php';
require_once 'inc/db.php';
require_once 'conf/settings.php';
?>

<html>
<head>
<link href="conf/style.css" rel="stylesheet"/>
<meta charset="utf-8">
<title>Mozi Autoshow</title>
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
	<header> <img src="images/mozi2.png">  </header>
	</div>
	<div class="reglog"> 
	<a href="login.php">Login</a> 
	</div>
	<hr>
<div class="topnav">
<a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="cars.php">Cars</a>
  <a href="news.php">News</a>
  <a href="contact.php">Contact</a>
</div>
<hr>
<div id="mainSection">
<section>
 <div class="image">
    <img src="images/car2.jpg">
<div id="rectangle2"></div>
<form class="reg" action="" name="register" method="POST">
<br /> <p>*Username:<input type="text" name="user" placeholder="Your nickname..." required /><br /></p>
<p>*First Name:<input type="text" name="f_name" placeholder="Your name..." required /><br /></p>
<p>*Last Name:<input type="text" name="l_name" placeholder="Your last name..." required /><br /></p>
<p>*Email:<input type="text" name="email" placeholder="Your email..." required /><br /></p>
<p>Phone number:<input type="text" name="p_num" placeholder="Your phone number.." /><br /></p>
<p>*Password:<input type="password" name="pass" /><br /></p>
<br /> <input type="submit" name="submit" value="Registration" onclick="confirm('Do you confirm the correctness of your data entered?')"/>
</form> 

<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['user']) && (isset($_POST['pass'])))
	{
		$user = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['user']));
		$f_name = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['f_name']));
		$l_name = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['l_name']));
		$email = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['email']));
		$p_num = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['p_num']));
		$pass = htmlspecialchars(mysqli_real_escape_string($connect,md5($_POST['pass'].$salt)));
		
		$query = "INSERT INTO `users`(`user`, `first_name`, `last_name`, `email`, `phone_number`, `password`) 
		VALUES ('$user','$f_name','$l_name','$email','$p_num','$pass')";
		$insert = mysqli_query($connect, $query);
		
		if($insert)
		{
			echo 'Done! Go to <a href="login.php">Login</a> page'; 
		}
		else
		{
			echo 'Error';
		}
	}
}
?>

</div>
 </section>
</div>
<hr>


<div class="section2">
	<p id="p1"></p>
	<p id="p2"> <br> </p>
<hr id="h1">
	<p id="p1"></p>
	<p id="p2"><br></p>
</div>
<div class="footer">
	<hr>
<div class="topnav">
  <a href="about.html">About</a>
  <a href="gallery.html">Gallery</a>
  <a href="news.html">News</a>
</div>
<hr>
	<footer> 
<a target="_blank" href="https://www.instagram.com/anmstem/"><img src="images/inst.png"></a>
<a target="_blank" href="https://vk.com/id57651763"><img src="images/vk.png"></a>
<a target="_blank" href="https://www.youtube.com/channel/UCJ89s9pUA8e7adboD8zVtFg"><img src="images/yt.png"></a>
<p id="p7"> &copy; Denis Garaschuk </p>

		</footer>
	  <div class="cont"><p id="p3">  Moskow, Russia <br> Saint Petersburg, Russia </p> <p id="p4"> <a href="contact.php">Contact Us</a> <br> Phone: +XXXXXXXXXX; +XXXXXXXXXX </p>

	  </div>
	
</div>
<script src="JS/main.js"></script>


 </body>
</html>