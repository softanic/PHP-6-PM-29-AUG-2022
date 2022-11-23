<?php
$con=mysqli_connect('localhost','root',"",'php6pm');
$q='select * from users where user_id<=14';
$result=mysqli_query($con,$q);
//echo mysqli_num_rows($result);

echo "<table border=1>";
echo "<tr><th>user Id</th><th>name</th><th>mobile no</th><th>email id </th><th>password</th><th>gender</th></tr>";
while($data=mysqli_fetch_row($result))
{
	//echo "<pre>";
	echo "<tr>";
	echo "<td>$data[0]</td>";
	echo "<td>$data[1]</td>";
	echo "<td>$data[2]</td>";
	echo "<td>$data[3]</td>";
	echo "<td>$data[4]</td>";
	echo "<td>$data[5]</td>";
	echo "</tr>";
	//echo "<li>". $data[1]."</li>";
}
echo "</ol>";
?>