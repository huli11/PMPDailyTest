<?php 

function sss($n,$m)
{
	$a = '';
	for ($i=0; $i < $n; $i++) { 
		$a .= 'a';
	}


	for ($i=0; $i < $m; $i++) { 
		$a .= 'a';
	}

	return strlen($a);
}

echo sss(3,100);

 ?>