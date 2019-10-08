<?php
	$angka = 37;

	echo "Mencari bilangan prima dari 1 s.d 37 <br> <br>";

	for ($i=1; $i<=$angka; $i++) { 
		$k = 0; // $k merupakan pembagi
		for ($j=1; $j<=$i; $j++) { 
			if($i % $j == 0){
				$k++; 
			}
		}

		if($k == 2){ //total pembagi bilangan tersebut berjumlah 2(pembaginya adalah 1 dan bilangan itu sendiri)
			echo "$i merupakan bilangan prima <br>";
		}
	}
?>