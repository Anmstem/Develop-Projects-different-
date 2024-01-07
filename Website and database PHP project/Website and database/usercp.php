<html>
<head>
<title></title>
</head>
<body>

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

echo '<br />
Username:' . $row['user'] .'<br />
First Name:' . $row['first_name'] .'<br />
Last Name:' . $row['last_name'] .'<br />
Rank:' . $row['rank_name'] . '<br />
Registration Date:' . $row['reg_date'] .'<br />'

?>



</body>
</html>