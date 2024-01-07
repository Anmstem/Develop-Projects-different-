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


<form class="car" action="" name="register" method="POST">
<br /> <p>News name:<input type="text" name="news_name" /><br /></p>
<p>Description:<textarea name="desc"></textarea><br /></p>
<p>Image(url):<input type="text" name="img" /><br /></p>
<br /> <input type="submit" name="submit" value="Confirm" onclick="confirm('Do you confirm the correctness of your data entered?')"/>
</form> 

<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['news_name']) && (isset($_POST['desc']) && (isset($_POST['img']))))
	{
		$news_name = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['news_name']));
		$desc = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['desc']));
		$img = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['img']));

		$query = "INSERT INTO `news`(`news_name`, `news_description`, `news_image`) 
		VALUES ('$news_name','$desc','$img')";
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