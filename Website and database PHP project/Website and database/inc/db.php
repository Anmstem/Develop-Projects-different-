<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "autoshow";

$connect = mysqli_connect($host,$user,$password,$db);

if($connect)
{

echo "Connected";

}
?>