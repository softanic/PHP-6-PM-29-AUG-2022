<?php
$arr=[50,5,60,20,22,10,5,9,70];
$arr2=[100,200,300,400];
$x=['c'=>10,'a'=>8,'g'=>50,'f'=>44,'m'=>37];
echo "<pre>";
//sort($x);
//rsort($x);
//asort($x);// sorts asso array in acending order acording to value
arsort($x);// sorts asso array in decending order acording to value
ksort($x);
krsort($x);
//print_r($x);
	if(in_array(660,$arr))
	{
		echo 'found';
	}else
	{
		echo 'not found';
	}
	$a=500;
	array_push($arr2,$a);
	array_pop($arr);
	$arr3=array_merge($arr,$arr2);
	print_r($arr3);
	echo array_sum($arr2);
	
?>