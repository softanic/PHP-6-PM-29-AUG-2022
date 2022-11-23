<?php
$name='dhawal';
$mobile_no='123456798';
$email_id='email id';
$gender='gender';
$password='123456';


$conn=mysqli_connect('localhost','root','','php6pm') or die('not connected');
$q="insert into users values(NULL,'$name','$mobile_no','$email_id','$password','$gender')";
$res=mysqli_query($conn,$q);
if($res)
{
	echo 'inserted';
}else{
	echo 'not inserted';
	echo mysqli_error($conn);
}

?>