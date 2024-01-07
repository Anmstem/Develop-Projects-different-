<?php
include_once 'inc/session.php';
require_once 'inc/db.php';
require_once 'conf/settings.php';
?>

<?php
include_once 'inc/session.php'; 
require_once 'inc/db.php';
include_once 'inc/menu.php'; 
//get id - user
$logged_user = (int)$_SESSION['uid'];
//print_r($_SESSION);
$query = "SELECT user, email, first_name, last_name, reg_date, rank.rank_name 
FROM users JOIN rank ON users.rank = rank.rank_id WHERE user_id = $logged_user";
$result = mysqli_query($connect,$query);
$rows = mysqli_num_rows($result);
if($rows > 0)
{
	$row = mysqli_fetch_assoc($result);
}

echo 
'<br /> Hello:' . $row['user'] .'<br />'
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
	<a> <?php include_once 'inc/menu.php'; ?> </a> 
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
    <p id="pi"> We are quality </p>
</div>
 </section>
</div>
<hr>
<div class="section2">
	<p id="p1">Different cars</p>
	<p id="p2">We offer cars of different classes and price ranges. <br>  Everything so that you find what was offered to you by fate.</p>
<hr id="h1">
	<p id="p1">Car showroom open to the world</p>
	<p id="p2">We are open to criticism and your suggestions. <br> You can always share your wishes and reviews.</p>
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
			echo '<meta http-equiv="refresh" content="0; url=usercp.php" />';
		}
		
		
	}
}
?>


 </body>
</html>