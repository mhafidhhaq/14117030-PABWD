<?php
	function swap(&$a, &$b){
		$temp = $a;
		$a = $b;
		$b = $temp;

		echo "x=".$a." y=".$b;
	}

	$x = 10;
	$y = 20;

	echo "x=".$x." y=".$y;
	echo "<br/> <br/>";

	swap($x, $y);
?>