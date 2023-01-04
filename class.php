<?php
class Student{
	
	public  $name;
	private  $roll_no;
	protected  $gender;
	
	
	public function __construct()
	{
		echo 'constructor called<br>';
	}
	public function __destruct()
	{
		echo '<br>destructor called<br>';
	}
	
	function get_name()
	{
		echo $this->name;
	}
	function set_name($n)
	{
		$this->name=$n;
	}
	function get_roll()
	{
		echo $this->roll_no;
	}
	
}

class mca_student extends Student
{
	public $has_comp;
	public function __construct()
	{
		echo 'mca constructor called<br>';
	}
	
}

$ms1=new mca_student();
$ms1->name='jayesh';
echo $ms1->name;
//$s1=new Student();
//$s1->set_name('abcd');
//$s1->name='xyz';
//echo $s1->get_roll();
?>