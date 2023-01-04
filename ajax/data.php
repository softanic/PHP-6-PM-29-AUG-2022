<?php
	$mobile=$_REQUEST['mobile'];
	
	$conn=mysqli_connect("localhost",'root',"","php6pm");
	$q="select * from users where mobile_no like '$mobile%'";
	$res=mysqli_query($conn,$q);
	while($row=mysqli_fetch_array($res))
	{
		echo "<tr><td>{$row['mobile_no']}</td></tr>";
	}	
?>