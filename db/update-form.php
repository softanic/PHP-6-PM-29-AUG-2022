<html>
	<body>
		<?php
		$user_id=$_GET['user_id'];
		$conn=mysqli_connect('localhost','root','','php6pm');
		$q="select * from users where user_id=$user_id";
		$res=mysqli_query($conn,$q);
		$user=mysqli_fetch_array($res);
		//print_r($user);
		
		?>
		<form action='update.php' method="post">
			<input type="hidden"  name="user_id" value="<?php echo $user_id; ?>"><br>
			
			<label>Name</label><br>
			<input type="text" name="name" value="<?php echo $user['name']; ?>"><br>
			
			<label>Mobile No</label><br>
			<input type="text" name="mobile_no" value="<?php echo $user['mobile_no']; ?>"><br>
			
			<label>Email Id</label><br>
			<input type="text" name="email_id" value="<?php echo $user['email_id']; ?>"><br>
			
			<label>Password</label><br>
			<input type="text" name="password" value="<?php echo $user['password']; ?>"><br>
			
			<label>Gender</label><br>
			<?php
			$male_checked=$female_checked="";
			if($user['gender']=='male')
			{
				$male_checked='checked';
			}else{
				$female_checked='checked';
			}
			
			//echo $user['gender']=='male' ? 'checked' : "";
			?>
			<input type="radio" name="gender" value="male" <?php echo $male_checked; ?>>Male
			<input type="radio" name="gender" value="female" <?php echo $female_checked; ?>>Female
			<br>
			<input type="submit" value="save">
		</form>
	</body>
</html>