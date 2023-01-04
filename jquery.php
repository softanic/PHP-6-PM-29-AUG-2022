<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			
			$("#btn").click(function(){
				$("#output").load('jquery-data.php');
			});
		});
		</script>
	</head>
	<body>
		<h1 id='output'></h1>
		<input type="button" id='btn' value='click here'>
	</body>
</html>