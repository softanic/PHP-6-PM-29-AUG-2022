<?php
$name=$_POST['name'];
$mobile_no=$_POST['mobile_no'];
$email_id=$_POST['email_id'];
$password=md5($_POST['password']);
$gender=$_POST['gender'];
$city=$_POST['city'];


$con=mysqli_connect("localhost","root","","php6pm") or die('not connectedddd');
$q="insert into users  values(NULL,'$name','$mobile_no','$email_id','$city','$password','$gender')";
$result=mysqli_query($con,$q);
if($result)
{
	$id=mysqli_insert_id($con);
	//echo "data inserted successfully at id no $id";
	echo "<script>alert('record inserted');window.location='login.php';</script>";
}else{
	//echo "Fail to insert data";
	//echo "<script>alert('record not inserted');window.location='login.php';</script>";
	echo mysqli_error($con);
}

?>