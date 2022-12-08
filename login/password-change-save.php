<?php
session_start();
$user=$_SESSION['user_data'];
$user_id=$user['user_id'];


$old=md5($_POST['old_password']);
$new=$_POST['new_password'];
$confirm=$_POST['confirm_password'];

$conn=mysqli_connect('localhost','root','','php6pm');
$q="select * from users where user_id='$user_id' and password='$old'";

$result=mysqli_query($conn,$q);
$count=mysqli_num_rows($result);
if($count>0)
{
	if($new==$confirm)
	{
		//update password
		
	}else{
		
		//error: new password and confirm_password doesnt match 
	}
	
}else{
	
	//error: old password incorrect
}

?>