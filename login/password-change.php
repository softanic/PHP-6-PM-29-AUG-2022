<html>
	<body>
		<form action="password-change-save.php" method="post">
			<input type="text" name="old_password" placeholder="enter old password" required><br><br>
			<input type="text" name="new_password" placeholder="enter new password"  required><br><br>
			<input type="text" name="confirm_password" placeholder="enter new password again"  required><br><br>
			<input type="submit" value="Change my password" ><br>
			
			<?php echo md5('123456'); ?>
			
		</form>
	</body>
</html>