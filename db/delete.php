<?php
$user_id=$_GET['user_id'];

$conn=mysqli_connect('localhost',"root","","php6pm");
$q="delete from users where user_id=$user_id";
$result=mysqli_query($conn,$q);
if(mysqli_affected_rows($conn)>=1)
{
	?>
	<script>alert('record deleted');window.location='select.php';</script>
<?php
}else{
	echo "<script>alert('record not deleted');window.location='select.php';</script>";
}

?>