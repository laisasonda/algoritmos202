<?php
	$i = 0;
	$n = 0;
	while ($i < 10){
		$num = array(20);
		
		echo rand(0,5)."<br>";
		$i++;

		if ($num == 3) {
			$n++;
		}
	}
	echo ("o número de vezes em que o valor 3 aparece: " .$n);
?>
 