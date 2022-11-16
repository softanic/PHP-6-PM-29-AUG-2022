<?php
function welcome(&$name)
{
	global $age;
	$name='pratik';
	$data= 'welcome '.$name.' your age is '.$age;
	return $data;
}
$age=20;
$name='himanshu';
echo welcome($name);

//echo "<br>$name";