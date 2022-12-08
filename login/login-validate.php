<?php
session_start();
$mobile_no=$_POST['mobile_no'];
$password=md5($_POST['password']);

$conn=mysqli_connect('localhost','root','','php6pm');
$q="select * from users where mobile_no='$mobile_no' and password='$password'";
$result=mysqli_query($conn,$q);
$count=mysqli_num_rows($result);
if($count>0)
{
	//login success
	$data=mysqli_fetch_assoc($result);
	$_SESSION['user_data']=$data;
	//print_r($data);
	header('location:home.php');
	
}else{
		
	//login fail
	echo "<script>alert('Wrong username/password'); window.history.back();</script>";
	
}

?>