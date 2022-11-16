
<?php
$v=['html'=>10,'js'=>20,'php'=>30];
$d=['css'=>20,'php'=>22,'php1'=>22,'php2'=>22,'php3'=>22];
$s=['js'=>30,'php'=>33];
$j=['java'=>40,'php'=>55];
$p=['history'=>50,'php'=>55];
$marks=array('vaishnavi'=>$v,'dhawal'=>$d,'shradhha'=>$s,'jayesh'=>$j,'pratik'=>$p);
//echo "<pre>";
//print_r($marks);

foreach($marks as $name=>$m)
{
	
	echo "<table border=1>";
	echo "<tr><th>Name:</th><th>$name</th></tr>";
	echo "<tr><td>Subject</td><td>Marks</td></tr>";
	
	$total=0;
	foreach($m as $subject =>$sm)
	{
		$total = $total+$sm;
		echo "<tr><td>$subject</td><td>{$sm}</td></tr>";
	}
	
	
	echo "<tr><td>Total</td><td>$total</td></tr>";
	
	
	
	echo "</table><br>";
}

?>