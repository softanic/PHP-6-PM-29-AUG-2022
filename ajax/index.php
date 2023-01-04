<html>
	<head>
		<script>
			function getData(data)
			{
				//alert()
				var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					 document.getElementById("output").innerHTML = this.responseText;
					 //alert(this.responseText);
					}
				  };
				  xhttp.open("GET", "data.php?mobile="+data, true);
				  xhttp.send();
			  
			  
			}
				
			
			
			
		</script>
	</head>
	<body>
		<?php
		$conn=mysqli_connect("localhost",'root',"","php6pm");
		$q="select * from users";
		$res=mysqli_query($conn,$q);
		
		?>
		<table border=1 style="border-collapse:collapse;">
			<thead>
				<tr>	
					<th>
						<input onkeyup="getData(this.value)" autofocus type="text">
					</th>
				</tr>
			</thead>
			<tbody id='output'>
				<?php
				while($row=mysqli_fetch_array($res))
				{
				echo "<tr><td>{$row['mobile_no']}</td></tr>";
				}
				?>
			</tbody>
		</table>
	</body>
</html>