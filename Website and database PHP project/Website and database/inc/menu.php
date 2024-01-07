<?php

if(isset($_SESSION['LoggedIn']))
{
	echo '<br /> <a href="usercp.php">User Panel</a> <br />'; 
}
else
{
	echo '<br /> <a href="register.php">Registration</a>'; echo '&nbsp|&nbsp'; echo '<a href="login.php">Login</a> <br />'; 
}

if(isset($_SESSION['LoggedIn']) && isset($_SESSION['rank']) && $_SESSION['rank'] > 1)
{
echo '<a href="admin.php">Admin Panel</a> <br />'; 
}

if(isset($_SESSION['LoggedIn']))
{
	echo '<br /> <a href="logout.php">Logout</a> <br />'; 
	
}
else
{

}
?>
