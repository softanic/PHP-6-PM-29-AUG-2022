<?php
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$gender=$_POST['gender'];

$user_id=$_POST['user_id'];

$con=mysqli_connect("localhost","root","","php6pm") or die('not connectedddd');
//$q="insert into users ('mobile_no','name','email_id','password','gender') values('$mobile_no','$name','$email_id','$password','$gender')";
$q="update users set name='$name',mobile_no='$mobile_no',email_id='$email_id',password='$password',gender='$gender' where user_id=$user_id";
$result=mysqli_query($con,$q);
if($result)
{

	echo "<script>alert('record updated');window.location='select.php';</script>";
}else{
	echo "<script>alert('record not updated');window.location='select.php';</script>";
}

?>