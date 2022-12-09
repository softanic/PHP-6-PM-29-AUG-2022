<?php
session_start();
$user=$_SESSION['user_data'];
$user_id=$user['user_id'];


$old=md5($_POST['old_password']);
$new=md5($_POST['new_password']);
$confirm=md5($_POST['confirm_password']);

$conn=mysqli_connect('localhost','root','','php6pm');
$q="select * from users where user_id='$user_id' and password='$old'";

$result=mysqli_query($conn,$q);
$count=mysqli_num_rows($result);
if($count>0)
{
	if($new==$confirm)
	{
		//update password
		$q2="update users set password='$new' where user_id='$user_id'";
		$res2=mysqli_query($conn,$q2);
		if(mysqli_affected_rows($conn))
		{
			//password changed successfully
			echo "<script>alert('password changed successfully'); window.location='home.php';</script>";
		}else{
			echo "<script>alert('something went wrong, Please try again.'); window.history.back();</script>";
		}
	}else{
		
		//error: new password and confirm_password doesnt match 
		echo "<script>alert('New pass and confirm password doesnt match, Please try again.');window.history.back();</script>";
	}
	
}else{
	
	//error: old password incorrect
	echo "<script>alert('Old password is wrong, Please try again.'); window.history.back();</script>";
}

?>