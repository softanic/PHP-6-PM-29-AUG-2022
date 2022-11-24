<html>
	<body>
		<form action="delete.php" method="get">
			<select name="user_id">
				<?php
					$con=mysqli_connect('localhost','root',"",'php6pm');
					$q='select * from users';
					$result=mysqli_query($con,$q);
					while($row=mysqli_fetch_array($result))
					{
						echo "<option value='{$row['user_id']}'>{$row['user_id']} - {$row['name']}</option>";
					}
				?>
				
				
			</select>
			<!-- <input type="number" name="user_id" placeholder="Enter user Id">
			-->
			<input type="submit" value="Delete">
		</form>
	</body>
</html>