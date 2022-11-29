<?php
include 'db.php';
$title=$_REQUEST['title'];
$desc=$_REQUEST['desc'];
$date=$_REQUEST['date'];
$city=$_REQUEST['city'];
$reporter=$_REQUEST['reporter'];
$type=$_REQUEST['type'];

$q="insert into news value(NULL,'$title','$desc','$date','$city','$reporter','$type')";
$res=mysqli_query($conn,$q);
if($res)
{
	echo "<script>alert('News inserted!');window.location='news.php';</script>";
}else{
	echo "<script>alert('News not inserted!');window.location='news-add.php';</script>";	
}
?>