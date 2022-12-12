<html>
	<head>
	
	</head>
	<body>
		<table width="100%">
			<tr>
				<th>
					<form action="login-validate.php" method="post">
		
					<table>
						<tr>	
							<td>
								<label>Mobile No</label><br>
								<input type="text" name="mobile_no">
							</td>
						</tr>
						<tr>	
							<td>
								<label>Password</label><br>
								<input type="text" name="password">
							</td>
						</tr>
						<tr>	
							<td>
								
								<input type="submit" name="">
							</td>
						</tr>
					</table>
					</form>
				</th>
				<th>
					<form action='signup-save.php' method="post" enctype="multipart/form-data">
					<table>
						<tr>	
							<td>
								<label>name</label><br>
								<input type="text" name="name">
							</td>
						</tr>
						<tr>	
							<td>
								<label>mobile no</label><br>
								<input type="text" name="mobile_no">
							</td>
						</tr>
						<tr>	
							<td>
								<label>email id</label><br>
								<input type="text" name="email_id">
							</td>
						</tr>
						<tr>	
							<td>
								<label>password</label><br>
								<input type="text" name="password">
							</td>
						</tr>
						<tr>	
							<td>
								<label>city</label><br>
								<input type="text" name="city">
							</td>
						</tr>
						<tr>	
							<td>
								<label>Gender</label><br>
								<select name="gender">
									<option>Male</option>
									<option>female</option>
								</select>
							</td>
						</tr>
						<tr>	
							<td>
								<label>Photo</label><br>
								<input type="file" name="dp" accept="image/*">
							</td>
						</tr>
						<tr>	
							<td>
								<input type="submit" value="register" name="">
							</td>
						</tr>
					</table>
					</form>
				</th>
			</tr>
		</table>
	
	
		
	</body>	
</html>