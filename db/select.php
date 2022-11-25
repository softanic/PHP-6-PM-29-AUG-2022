<?php
$con=mysqli_connect('localhost','root',"",'php6pm');
$q='select * from users';
$result=mysqli_query($con,$q);
//echo mysqli_num_rows($result);
echo "<a href='insert-form.php'>Add New Record</a>";
echo "<table border=1>";
echo "<tr><th>user Id</th>
		<th>name</th>
		<th>mobile no</th>
		<th>email id </th>
		<th>city</th>
		<th>password</th>
		<th>gender</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>";
//while($data=mysqli_fetch_row($result))
//while($data=mysqli_fetch_assoc($result))
while($data=mysqli_fetch_array($result))
{
	//echo "<pre>";
	//print_r($data);
	echo "<tr>";
	echo "<td>".$data['user_id']."</td>";
	echo "<td>{$data['name']}</td>";
	echo "<td>{$data['mobile_no']}</td>";
	echo "<td>{$data['email_id']}</td>";
	echo "<td>{$data['city']}</td>";
	echo "<td>{$data['password']}</td>";
	echo "<td>{$data['gender']}</td>";
	echo "<td><a onclick='return confirm(\"are u sure want to delete? \")' href='delete.php?user_id={$data['user_id']}'>Delete</a></td>";
	echo "<td><a  href='update-form.php?user_id={$data['user_id']}'>Edit</a></td>";
	
	echo "</tr>";
	
	//echo "<li>". $data[1]."</li>";
}
echo "</table>";
?>