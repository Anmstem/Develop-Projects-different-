<?php
include_once 'inc/session.php'; 
include_once 'inc/menu.php';
require_once 'inc/db.php';
?>
<html>
<head>
	<link href="conf/style.css" rel="stylesheet"/>

	<meta charset="utf-8">
	<title>Cars</title>

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
  <a href="news.php">News</a>
  <a href="contact.php">Contact</a>
</div>
<hr>
<div id="mainSection">
<section class="img">
<p>
<?php

$car_select = htmlspecialchars((int)$_GET['id']);

$query = "SELECT `car_id`, `image`, `brand`, `model`, `release_date`, `engine_type`, `transmission_type`, `drive_unit`, `mileage`, `price` 
FROM `cars` WHERE car_id = $car_select";
$result = mysqli_query($connect, $query);
$rows = mysqli_num_rows($result);
if($rows == 0)
{
	echo 'No result!';
}
else
{
	while ($row = mysqli_fetch_assoc($result))
	{
	echo '<img src="'.$row['image'].'"/><br />';
	echo '<h2> brand: '.$row['brand'].'</h2><br />';
	echo '<h2> model: '.$row['model'].'</h2><br />';
	echo '<h2> release date: '.$row['release_date'].'</h2><br />';
	echo '<h2> engine type: '.$row['engine_type'].'</h2><br />';
	echo '<h2> transmission type: '.$row['transmission_type'].'</h2><br />';
	echo '<h2> drive unit: '.$row['drive_unit'].'</h2><br />';
	echo '<h2> mileage: '.$row['mileage'].'</h2><br />';
	echo '<h2> price: '.$row['price'].'</h2><br />';
	echo '<a href="car_details.php?id='.$row['car_id'].'">read more</a><br/>';
	echo '<hr>';
	}
}

?>

</p>
</section>
</div>

<div class="footer">
	<hr>
<div class="topnav">
 <a href="index.html">Home</a>
  <a href="about.html">About</a>
  <a href="news.html">News</a>
</div>
<hr>
	<footer> 

		<a target="_blank" href="https://www.instagram.com/anmstem/"><img src="images/inst.png"></a>
<a target="_blank" href="https://vk.com/id57651763"><img src="images/vk.png"></a>
<a target="_blank" href="https://www.youtube.com/channel/UCJ89s9pUA8e7adboD8zVtFg"><img src="images/yt.png"></a>
		
	  </footer>
	  <div class="cont"><p id="p3">  Moskow, Russia <br> Saint Petersburg, Russia </p> <p id="p4"> <a href="contact.php">Contact Us</a> <br> Phone: +XXXXXXXXXX; +XXXXXXXXXX </p></div>
</div>
<script src="JS/main.js"></script>
 
</body>
</html>