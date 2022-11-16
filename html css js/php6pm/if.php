<html>
	<head>
	</head>
	<body>
		 
		<?php
			$gender='female';
			if($gender=='male')
			{
		?>
				<h1>today is his birthday</h1>
				<h1>today is his birthday</h1>
				<h1>today is his birthday</h1>
				<h1>today is his birthday</h1>
				<h1>today is his birthday</h1>
				<h1>today is his birthday</h1>
		<?php
			}else
			{
		?>
				<h1>today is her birthday</h1>
				<h1>today is her birthday</h1>
				<h1>today is her birthday</h1>
				<h1>today is her birthday</h1>
				<h1>today is her birthday</h1>
				<h1>today is her birthday</h1>
		<?php
			}
			
			/*if($gender=='male')
			{
				if($age==21)
				{
					
				}
				
			}else if($gender=='female')
			{
				if($age==18)
				{
				}
				
			}else{
				
			}
			*/
			switch($gender)
			{
				case 'male':
					echo 'male case';
					break;
				case 'female':
					echo 'female case';
					break;
				default:
					echo "default case";
					break;
			}
		?>
		
	</body>
</html>