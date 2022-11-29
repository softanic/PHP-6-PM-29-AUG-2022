<html>
	<head>
	
	</head>
	<body>
		<h1>Add News Here...</h1>
		<form action="news-save.php" method="post">
			<table border=0>
				<tr>
					<th>Title</th>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<th>Description</th>
					<td><textarea rows=3 cols=21 name="desc"></textarea></td>
				</tr>
				<tr>
					<th>Date</th>
					<td><input type="date" name="date"></td>
				</tr>
				<tr>
					<th>City</th>
					<td><input type="text" name="city"></td>
				</tr>
				<tr>
					<th>Reporter Name</th>
					<td><input type="text" name="reporter"></td>
				</tr>
				<tr>
					<th>Type of news</th>
					<td>
						<select name="type">
							<option>Sports</option>
							<option>Politics</option>
							<option>national</option>
							<option>Business</option>
							<option>Agri</option>
						</select>
					</td>
				</tr>
				<tr>
					<th></th>
					<td><input type="submit" value="save news"></td>
				</tr>
			</table>
		</form>
	</body>
</html>