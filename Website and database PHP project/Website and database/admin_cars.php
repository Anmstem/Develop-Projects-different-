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
<br /> <p>Car image(url):<input type="text" name="car_img" /><br /></p>
<p>Brand:<input type="text" name="brand" /><br /></p>
<p>Model:<input type="text" name="model" /><br /></p>
<p>Release date:<input type="text" name="rel_date" /><br /></p>
<p>Engine type:<input type="text" name="en_type" /><br /></p>
<p>Transmissiom type:<input type="text" name="tran_type" /><br /></p>
<p>Drive unit:<input type="text" name="dr_unit" /><br /></p>
<p>Mileage:<input type="text" name="mile" /><br /></p>
<p>Price:<input type="text" name="price" /><br /></p>
<br /> <input type="submit" name="submit" value="Confirm" onclick="confirm('Do you confirm the correctness of your data entered?')"/>
</form> 

<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['brand']) && (isset($_POST['model']) && (isset($_POST['car_img']))))
	{
		$car_img = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['car_img']));
		$brand = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['brand']));
		$model = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['model']));
		$rel_date = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['rel_date']));
		$en_type = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['en_type']));
		$tran_type = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['tran_type']));
		$dr_unit = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['dr_unit']));
		$mile = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['mile']));
		$price = htmlspecialchars(mysqli_real_escape_string($connect,$_POST['price']));
		
		$query = "INSERT INTO `cars`(`image`, `brand`, `model`, `release_date`, `engine_type`, `transmission_type`, `drive_unit`, `mileage`, `price`) 
		VALUES ('$car_img','$brand','$model','$rel_date','$en_type','$tran_type','$dr_unit','$mile','$price')";
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