<?php

	$i = 0;

	$num = array(0 => rand(0,10), 1 => rand(0,10), 2 => rand(0,10), 3 => rand(0,10), 4 => rand(0,10));
	foreach ($num as $valor) {
		echo $valor ."<br>";
		echo min($num);
	}
?>
 