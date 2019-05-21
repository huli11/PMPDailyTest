<?php 

$string = [2,4,3,6,3,2,5,5];
$len = strlen($string);
$arr=[];
$aa=0;
for ($i=0; $i < $len; $i++) { 
	if ($i==1) {
		$aa++;
	}else{
		$aa=1;
	}
	$arr = $aa;
}
print_r($arr)

 ?>