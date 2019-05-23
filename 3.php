<?php 


function Sum_Solution($n)
{
	$sum = $n;
	$sum && ($sum+=Sum_Solution($n-1));
	return $sum;
}

echo Sum_Solution(10);




 ?>