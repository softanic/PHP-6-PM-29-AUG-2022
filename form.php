<html>
	<head>
	
	</head>
	<body>
		<form action="form-save.php" method="POST">
			<label>First Name</label><br>
			<input type="text" name="fname"><br>
			<label>Last Name</label><br>
			<input type="text" name="lname"><br>
			<label>Gender</label><br>
			<input type="radio" name="gender" value="male">पुरुष 
			<input type="radio" name="gender" value="female">स्त्री 
			<br>
			<label>city</label><br>
			<input type="checkbox" name="city[]" value="jalgaon">Jalgaon 
			<input type="checkbox" name="city[]" value="pune">pune
			<input type="checkbox" name="city[]" value="mumbai">mumbai
			<input type="checkbox" name="city[]" value="nashik">nashik
			<br>
			
			<br>
			
			<input type="submit">
		</form>
		<hr>
		<h1>get form</h1>
		<form action="form-save.php" method="get">
			<label>First Name</label><br>
			<input type="text" name="fname"><br>
			<label>Last Name</label><br>
			<input type="text" name="lname"><br><br>
			<input type="submit">
		</form>
		
	</body>
</html>