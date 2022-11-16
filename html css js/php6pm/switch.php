<?php
	function holiday($day)
	{
		switch(&$day)
		{
			case 'mon':
				echo "this is monday";
				break;
			case 'tue':
				echo "this is tuesday";
				break;
			case 'wed':
				echo "this is wed";
				break;
			case 'thi':
				echo "this is thi";
				break;
			case 'fri':
				echo "this is fri";
				break;
			case 'sat':
				echo "this is sat";
				break;
			case 'sun':
				echo "this is sunday";
				break;
			default:
				echo "Please enter valid day";
				break;
				
		}
	}
	holiday('mon')

?>