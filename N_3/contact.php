<?php 
	$a = $_POST['number'];
	$b = $_POST['numberone'];


	// 1-masala

	// while ($a >= $b) {
	// 	$a = $a - $b;
	// }
	// echo $a;

	// 2-masal

	// $v = 0;
	// while ($a >= $b) {
	// 	$a = $a - $b;
	// 	$v++;
	// }
	// echo $v;\

	// 3-masala

	// $v = 0;
	// while ($a >= $b) {
	// 	$a = $a - $b;
	// 	$v++;
	// }
	// echo $v." ".$a;

	// 4-masala

	// while ($a >= $b) {
	// 	$a = $a - $b;
	// }
	// if ($a == 0) {
	// 	echo "3 -- ning darajasi";
	// }
	// else {
	// 	echo "3 -- ning darajasi emas";
	// }

	// 5-masala

	// $v = 2;
	// $k = 0;
	// while ($v <= $a ) {
	// 	$v = $v * 2;
	// 	$k++;
	// }
	// echo $k;

	// 6-masala

	// $v = 0;
	// $s = 1;
	// while ($v < $a) {
	// 	$s *= $a - $v;
	// 	$v += 2;
	// }
	// echo $s;

	// 7-masala

	// $v = 0;
	// while ($v < $a) {
	// 	if (pow($v, 2) > $a) {
	// 		echo $v;
	// 		$v = $a;
	// 	}
	// 	$v++;
	// }

	// 8-masala

	// $v = $a;
	// while ($v <= $a) {
	// 	if (pow($v, 2) <= $a) {
	// 		echo $v;
	// 		$v = $a + 2;
	// 	}
	// 	$v--;
	// }

	// 9-masala

	// $v = 0;
	// while ($v < $a) {
	// 	if (pow(3, $v) > $a) {
	// 		echo $v;
	// 		$v = $a;
	// 	}
	// 	$v++;
	// }

	// 10-masala

	// $v = $a;
	// while ($v <= $a) {
	// 	if (pow(3, $v) <= $a) {
	// 		echo $v;
	// 		$v = $a + 2;
	// 	}
	// 	$v--;
	// }

	// 11, 12, 13, 14 -masalalar
	
	// $v = 1;
	// $s = 0;
	// while ($v <= $a) {
	// 	$s += $v;
	// 	$v++;
	// }
	// echo $s;

	// 15-masala

	$v = 0;
	$s = $a;
	while ($s < 2 * $a) {
		$s += ($s / 100) * $b;
		$v++;
		echo $s." ";
	}
	echo $v;

	// masala
	
	// a  <  b

	// $h = $a;
	// while ($h > 0 ) {
  	// 	$h = $h - 2;
  	// 	if ( $h == 0) {
    // 		$c = false;
  	// 	}
  	// 	else {
    // 		$c = true;
  	// 	};
	// };
    
	// if ($c == true) {
  	// 	$a = $a + 2;
  	// 	$d = 1;
  	// 	while ($a < $b) {
    // 		$d *= $a;
    // 		$a += 2;
  	// 	};
  	// 	$e = $d;
	// }
	// elseif ($c == false) {
  	// 	$a = $a + 1;
  	// 	$d = 1;
  	// 	while ($a < $b) {
    // 		$d *= $a;
    // 		$a += 2;
  	// 	};
  	// 	$e = $d;      
	// };
	// echo $e;

?>