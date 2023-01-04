<html>
	<head>
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		
		<script>
		$(document).ready(function(){
			
			$("#input").keyup(function(){
				var data=$(this).val();
				
				//alert(data);
				$("#output").load('data.php?mobile='+data);
			});
		});
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
						<input id='input' autofocus type="text">
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