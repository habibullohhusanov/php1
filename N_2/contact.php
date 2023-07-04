<?php 
	$a = $_POST['number'];
	$b = $_POST['numberone'];

	// 1-masala

	// for ($i=1; $i < $b; $i++) { 
	// 	echo $a." ";
	// }

	// 2-masala

	// for ($i=$a; $i <= $b; $i++) { 
	// 	echo $i." ";
	// 	$v++;
	// }
	// echo "<br>".$v;

	// 3-masala

	// $v = 0;
	// for ($i=$b-1; $i > $a; $i--) { 
	// 	echo $i." ";
	// 	$v++;
	// }
	// echo "<hr>".$v;

	// 4-masala

	// $v = 1;
	// for ($i=1; $i < 11; $i++) {
	// 	$n = $a * $v;
	// 	echo $n." ";
	// 	$v++;
	// }

	// 5-masala

	// $v = 10;
	// $s = 1;
	// for ($i=0.1; $i < 1; $i=$i+0.1) {
	// 	$n = $a / $v * $s;
	// 	echo $n."--";
	// 	$s++;
	// }

	// 6-masala

	// for ($i=1.2; $i < 2; $i=$i+0.2) {
	// 	$n = $a * $i;
	// 	echo $n."--";
	// }

	// 7-masala

	// $v = 0;
	// for ($i=$a+1; $i < $b; $i++) {
	// 	$v = $v + $i;
	// }
	// echo $v."<br>";

	// 8-masala

	// $v = 1;
	// for ($i=$a+1; $i < $b; $i++) {
	// 	$v = $v * $i;
	// }
	// echo $v."<br>";

	// 9-masala

	// $v = 0;
	// for ($i=$a+1; $i < $b; $i++) {
	// 	$s = pow($i, 2);
	// 	$v = $v + $s;
	// }
	// echo $v."<br>";

	// 10-masala

	// $v = 0;
	// for ($i=1; $i < $a+1; $i++) { 
	// 	$s = 1 / $i;
	// 	echo $s." ";
	// 	$v = $v + $s;
	// }
	// echo $v;

	// 11-masala

	// $v = 1;
	// for ($i=0; $i <= $a; $i++) {
	// 	$v = $v + pow($a + $i, 2);
	// }
	// echo $v;

	// 12-masala

	// $v = 1;
	// $s = 1;
	// for ($i=1.1; $s <= $a; $i+=0.1) { 
	// 	$v *= $i;
	// 	$s++;
	// }
	// echo $v;

	// 14-masala

	// $v = 0;
	// for ($i=1; $i <= $a*2-1; $i+=2) { 
	// 	$v +=$i;
	// }
	// echo $v;

	// 15-masala

	// $v = 1;
	// for ($i=1; $i <= $b; $i++) { 
	// 	$v *= $a;
	// }
	// echo $v;

	// 16-masala

	// for ($i=1; $i <= $b; $i++) { 
	// 	$v = pow($a, $i);
	// 	echo $v."<br>";
	// }

	// 17-masala

	// $v = 0;
	// for ($i=1; $i <= $b; $i++) { 
	// 	$v += pow($a, $i);
	// }
	// echo $v;

	// 18-masala



	// 19-masala

	// $v = 1;
	// for ($i=1; $i <= $a; $i++) { 
	// 	$v *= $i;
	// }
	// echo $v;

	// 20-masala

	// $v = 0;
	// for ($i=1; $i <= $a; $i++) { 
	// 	$v += $i;
	// }
	// echo $v;

	// 21-masala

	// 36-masala


	// $v = 0;
	// for ($i=1; $i <= $a; $i++) { 
	// 	$v += pow($i, $b);
	// }
	// echo $v;

	// 37-masala


	// $v = 0;
	// for ($i=1; $i <= $a; $i++) { 
	// 	$v += pow($i, $i);
	// }
	// echo $v;

	// 38-masala

	// $v = 0;
	// $s = $a;
	// for ($i=1; $i <= $a; $i++) {
	// 	$v += pow($i, $s);
	// 	$s--;
	// }
	// echo $v;
	// 1**6+2**5+3**4+4**3+5**2+6**1=1+32+81+64+25+6=82+70+57=82+127=209

	// 39-masala

	for ($i=$a; $i <= $b; $i++) { 
		for ($v=$a; $v <= $i; $v++) { 
			echo $i." ";
		}
	}

	// #00fffa

?>