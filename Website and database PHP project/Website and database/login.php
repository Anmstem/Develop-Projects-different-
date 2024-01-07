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
	<a href="register.php">Registration</a>
	</div>
	<hr>
<div class="topnav">
<a href="index.php"> 
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
<div id="rectangle"></div>

<form class="log" action="" name="register" method="POST">
<br /> <p>Username:<input type="text" name="user" /><br /></p>
<p>Password:<input type="password" name="pass" /><br /></p>
<p>Remember me:<input type="checkbox" name="remember" /><br /></p>
<br /> <input type="submit" name="submit" value="Log in" />
</form> 

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
<?php
if(isset($_POST['submit']))
{
	
	if(isset($_POST['user']) && (isset($_POST['pass'])))
	{
		$user = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['user']));
		$pass = htmlspecialchars(mysqli_real_escape_string($connect,md5($_POST['pass'].$salt)));
		if(isset($_POST['remember']))
		{
			$remember = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['remember']));
		}
		else
		{
			$remember = "off";
		}
		$query = "SELECT `user_id`, `user`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `reg_date`, `rank` 
		FROM `users` WHERE user = '$user' AND password = '$pass'";
		$result = mysqli_query($connect,$query);
		//if(!$result){die (mysqli_error($connect)); }
		$row = mysqli_fetch_assoc($result);
		$check = mysqli_num_rows($result);
		if($check == 1)
		{
			$_SESSION['LoggedIn'] = true;
			$_SESSION['uid'] = $row['user_id'];
			$_SESSION['rank'] = $row['rank'];
			echo '<meta http-equiv="refresh" content="0; url=logindex.php" />';
		}
		
		
	}
}
?>

 </body>
</html>