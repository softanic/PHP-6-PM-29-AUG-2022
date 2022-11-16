<html>
	<head>
	</head>
	<body>
		 <table border=1>
		 
		<?php
		for($i=0;$i<=10;$i++)
		{
			echo '<tr><td>'.$i.'</td></tr>';
		}
		?>
		</table>
		<?php
		$x=11;
		do
		{
			echo $x++;
		}while($x<10);
		?>
	</body>
</html>