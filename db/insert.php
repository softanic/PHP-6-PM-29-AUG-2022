<?php
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$password=$_POST['password'];
$gender=$_POST['gender'];


$con=mysqli_connect("localhost","root","","php6pm") or die('not connectedddd');
$q="insert into users values(NULL,'$name','$mobile_no','$email_id','$password','$gender')";
$result=mysqli_query($con,$q);
if($result)
{
	$id=mysqli_insert_id($con);
	echo "data inserted successfully at id no $id";
}else{
	echo "Fail to insert data";
	echo mysqli_error($con);
}

?>