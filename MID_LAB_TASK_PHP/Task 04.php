<?php
	$number1 = 899;
	$number2 = 44;
	$number3 = 40441;
	if($number1>$number2 && $number1>$number3)
	{
		echo $number1."This number is the largest"."<br>";
	}
	
	else if($number2>$number1 && $number2>$number3)
	{
		echo $number2."This number is the largest"."<br>";
	}
	
	else if($number3>$number1 && $number3>$number2)
	{
		echo $number3."This number is the largest"."<br>";
	}
?>
