<?php
session_start();
//print_r($_SESSION['user_data']);
if(!isset($_SESSION['user_data']))
{
	header("location:login.php");
	exit(0);
}
$user=$_SESSION['user_data'];
echo 'welcome '. $user['name'];
?>
<br>
<a href="password-change.php">change Password</a>
<br>
<a href="logout.php">Logout</a>