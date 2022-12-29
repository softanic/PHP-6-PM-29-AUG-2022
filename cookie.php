<?php
date_default_timezone_set("Asia/kolkata");

setcookie('username','abcd',time()+60*60*24*365*2);
setcookie('password','abcd',time()+60*60*24*365*2);

//print_r($_COOKIE);
if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
{
	$username=$_COOKIE['username'];
	$password= $_COOKIE['password'];
	//check username and password in db
	//if correct go to home page
	//else delete cookie and send to login page
	
}else{
	
	//show login form
}

?>