<?php
include_once 'inc/session.php'; 
if(isset($_SESSION))
{
	$_SESSION = array();
	session_destroy();
	unset($_SESSION);
	echo '<meta http-equiv="refresh" content="0; url=usercp.php" />';
}
?>
<html>
<head>
<title></title>
</head>
<body>

</body>
</html>