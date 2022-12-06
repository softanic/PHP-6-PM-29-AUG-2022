<?php
session_start();
if(!isset($_SESSION['user']))
{
	//invalid user
	header("location:login.php");
}//user is logged in

echo "welcome ".$_SESSION['user']['name'];


?>
<a href="logout.php">Logout</a>