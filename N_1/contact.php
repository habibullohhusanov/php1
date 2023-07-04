<?php 
	$a = $_POST['number'];
	$b = $_POST['numbertwo'];
	$c = $_POST['numberthree'];
	$d = $_POST['numberfour'];

	// 1-masala

	// if ($a > 0) {
	// 	$a = $a + 1;
	// 	echo $a;
	// }
	// else {
	// 	echo $a;
	// }

	// 2-masala

	// if ($a > 0) {
	// 	$a = $a - 2;
	// 	echo $a;
	// }
	// else {
	// 	$a = $a + 1;
	// 	echo $a;
	// }

	// 3-masala

	// if ($a > 0) {
	// 	$a = $a  +1;
	// 	echo $a;
	// }
	// elseif ($a == 0) {
	// 	$a = 10;
	// 	echo $a;
	// }
	// else {
	// 	echo $a;
	// 	$a = $a - 2;
	// }

	// 4-masala

	// if ($a > 0 && $b < 0 &&  $c < 0) {
	// 	echo "1 ta musbat son bor -- a";
	// }
	// elseif ($b > 0 && $a < 0 &&  $c < 0) {
	// 	echo "1 ta musbat son bor -- b";
	// }
	// elseif ($c > 0 && $a < 0 && $b < 0) {
	// 	echo "1 ta musbat son bor -- c";
	// }
	// elseif ($a > 0 && $b > 0 &&  $c < 0) {
	// 	echo "2 ta musbat son bor -- a, b";
	// }
	// elseif ($a > 0 && $c > 0 && $b < 0) {
	// 	echo "2 ta musbat son bor -- a, c";
	// }
	// elseif ($b > 0 && $c > 0 && $a < 0) {
	// 	echo "2 ta musbat son bor -- b, c";
	// }
	// elseif ($a > 0 && $b > 0 &&  $c > 0) {
	// 	echo "Hammasi musbat son";
	// }
	// elseif ($a < 0 && $b < 0 &&  $c < 0) {
	// 	echo "Hammasi manfiy son";
	// }

	// 5-masala

	// if ($a > 0 && $b < 0 &&  $c < 0) {
	// 	echo "1 ta musbat, 2 ta manfiy son bor";
	// }
	// elseif ($b > 0 && $a < 0 &&  $c < 0) {
	// 	echo "1 ta musbat, 2 ta manfiy son bor";
	// }
	// elseif ($c > 0 && $a < 0 && $b < 0) {
	// 	echo "1 ta musbat, 2 ta manfiy son bor";
	// }
	// elseif ($a > 0 && $b > 0 &&  $c < 0) {
	// 	echo "2 ta musbat, 1 ta manfiy son bor";
	// }
	// elseif ($a > 0 && $c > 0 && $b < 0) {
	// 	echo "2 ta musbat, 1 ta manfiy son bor";
	// }
	// elseif ($b > 0 && $c > 0 && $a < 0) {
	// 	echo "2 ta musbat, 1 ta manfiy son bor";
	// }
	// elseif ($a > 0 && $b > 0 &&  $c > 0) {
	// 	echo "Hammasi musbat son";
	// }
	// elseif ($a < 0 && $b < 0 &&  $c < 0) {
	// 	echo "Hammasi manfiy son";
	// }

	// 6-masala

	// if ($a > $b) {
	// 	echo "a soni katta";
	// }
	// elseif ($a == $b) {
	// 	echo "bu sonlar teng";
	// }
	// else {
	// 	echo "b soni katta";
	// }

	// 8-masala

	// if ($a > $b) {
	// 	echo $a."<br>";
	// 	echo $b;
	// }
	// elseif ($a == $b) {
	// 	echo "bu sonlar teng";
	// }
	// else {
	// 	echo $b."<br>";
	// 	echo $a;
	// }

	// 9-masala

	// if ($a > $b) {
	// 	$b = $b + $a;
	// 	echo $a."<br>";
	// 	echo $b;
	// }
	// elseif ($a == $b) {
	// 	$b = $b + 1;
	// 	echo $a."<br>";
	// 	echo $b;
	// }
	// else {
	// 	echo $a."<br>";
	// 	echo $b;
	// }

	// 10-masala

	// if ($a != $b) {
	// 	$n = $a + $b;
	// 	$a = $n;
	// 	$b = $n;
	// 	echo $a."<br>";
	// 	echo $b."<br>";
	// }
	// else {
	// 	$a = 0;
	// 	$b = 0;
	// 	echo $a."<br>";
	// 	echo $b;
	// }

	// 11-masala 

	// if ($a != $b) {
	// 	if ($a > $b) {
	// 		$b = $a;
	// 		echo $b;
	// 	}
	// 	else {
	// 		$a = $b;
	// 		echo $a;
	// 	}
	// }
	// else {
	// 	$a = 0;
	// 	$b = 0;
	// 	echo $a;
	// }

	// 12-masala

	// if (min($a, $b, $c) == $a) {
	// 	echo "Eng kichigi ".$a;
	// }
	// elseif (min($a, $b, $c) == $b) {
	// 	echo "Eng kichigi ".$b;
	// }
	// if (min($a, $b, $c) == $c) {
	// 	echo "Eng kichigi ".$c;
	// }

	// 13-masala

	// if (min($a, $b, $c) == $b && max($a, $b, $c) == $c) {
	// 	echo "O'rtachasi ".$a;
	// }
	// elseif (min($a, $b, $c) == $c && max($a, $b, $c) == $b) {
	// 	echo "O'rtachasi ".$a;
	// }
	// elseif (min($a, $b, $c) == $a && max($a, $b, $c) == $c) {
	// 	echo "O'rtachasi ".$b;
	// }
	// elseif (min($a, $b, $c) == $c && max($a, $b, $c) == $a) {
	// 	echo "O'rtachasi ".$b;
	// }
	// elseif (min($a, $b, $c) == $a && max($a, $b, $c) == $b) {
	// 	echo "O'rtachasi ".$c;
	// }
	// elseif (min($a, $b, $c) == $b && max($a, $b, $c) == $a) {
	// 	echo "O'rtachasi ".$c;
	// }

	// 14-masala

	// if (min($a, $b, $c) == $b && max($a, $b, $c) == $c) {
	// 	echo "kichigi ".$b."<br>";
	// 	echo "kattasi".$c;
	// }
	// elseif (min($a, $b, $c) == $c && max($a, $b, $c) == $b) {
	// 	echo "kichigi ".$c."<br>";
	// 	echo "kattasi".$b;
	// }
	// elseif (min($a, $b, $c) == $a && max($a, $b, $c) == $c) {
	// 	echo "kichigi ".$a."<br>";
	// 	echo "kattasi".$c;
	// }
	// elseif (min($a, $b, $c) == $c && max($a, $b, $c) == $a) {
	// 	echo "kichigi ".$c."<br>";
	// 	echo "kattasi".$a;
	// }
	// elseif (min($a, $b, $c) == $a && max($a, $b, $c) == $b) {
	// 	echo "kichigi ".$a."<br>";
	// 	echo "kattasi".$b;
	// }
	// elseif (min($a, $b, $c) == $b && max($a, $b, $c) == $a) {
	// 	echo "kichigi ".$b."<br>";
	// 	echo "kattasi".$a;
	// }

	// 15-masala

	// $ab = $a + $b;
	// $ac = $a + $c;
	// $bc = $b + $c;
	// if (max($ab, $ac, $bc) == $ab) {
	// 	echo $a."<br>".$b;
	// }
	// elseif (max($ab, $ac, $bc) == $ac) {
	// 	echo $a."<br>".$c;
	// }
	// elseif (max($ab, $ac, $bc) == $bc) {
	// 	echo $b."<br>".$c;
	// }

	//16-masala

	// if ($a == $b - 1 && $a == $c - 2) {
	// 	$a = 2 * $a;
	// 	$b = 2 * $b;
	// 	$c = 2 * $c;
	// 	echo $a."<br>";
	// 	echo $b."<br>";
	// 	echo $c;
	// }
	// else {
	// 	echo "Sonlar o'sish tartibida emas";
	// }

	// 17-masala

	// if ( ($a == $b - 1 && $a == $c - 2) || ($a == $b + 1 && $a == $c + 2)) {
	// 	$a = 2 * $a;
	// 	$b = 2 * $b;
	// 	$c = 2 * $c;
	// 	echo $a."<br>";
	// 	echo $b."<br>";
	// 	echo $c;
	// }
	// else {
	// 	echo "Sonlar o'sish yoki kamayish tartibida emas";
	// }

	// 18-masala

	// if ($a == $b && $a != $c) {
	// 	echo "3";
	// }
	// elseif ($a == $c && $a != $b) {
	// 	echo "2";
	// }
	// elseif ($b == $c && $b != $a) {
	// 	echo "1";
	// }

	// 19-masala

	// if ($a == $b && $a == $c && $a != $d) {
	// 	echo "4";
	// }
	// elseif ($a == $b && $a == $d && $a != $c) {
	// 	echo "3";
	// }
	// elseif ($a == $c && $a == $d && $a != $b) {
	// 	echo "2";
	// }
	// elseif ($b == $c && $b == $d && $b != $a) {
	// 	echo "1";
	// }

	// 20-masala

	// $ae = abs($a);
	// $be = abs($b);
	// $ce = abs($c);
	// $ab = $b - $a;
	// $ac = $c - $a;
	// if ($ab < $ac) {
	// 	echo "Eng yaqini b  Ulor orasidagi masofa ".abs($ab);
	// }
	// elseif ($ab > $ac) {
	// 	echo "Eng yaqini c  Ulor orasidagi masofa ".abs($ac);
	// }

	// 21-masala

	// if ($a == 0 && $b == 0) {
	// 	$f = 0;
	// 	echo $f;
	// }
	// elseif ($a == 0 || $b == 0) {
	// 	echo "1"."<br>"."2";
	// }
	// elseif ($a != 0 && $b != 0) {
	// 	$f = 3;
	// 	echo $f;
	// }

	// 22-masala

	// if ($a > 0 && $b > 0) {
	// 	$f = "I";
	// 	echo $f;
	// }
	// elseif ($a < 0 && $b > 0) {
	// 	$f = "II";
	// 	echo $f;
	// }
	// elseif ($a < 0 && $b < 0) {
	// 	$f = "III";
	// 	echo $f;
	// }
	// elseif ($a > 0 && $b < 0) {
	// 	$f = "IV";
	// 	echo $f;
	// }

	// 23-masala

	// if ($a == 0 && $c == 0) {
	// 	echo "A ($b, $d)";
	// }

	// 24-masala

	// if ($a > 0) {
	// 	$f = 2 * sin($a);
	// 	echo $f;
	// }
	// elseif ($a <= 0) {
	// 	$f = $a - 6;
	// 	echo $f;
	// }

	// 25-masala

	// if ($a < -2 || $a > 2) {
	// 	$f = $a * 2;
	// 	echo $f;
	// }
	// else {
	// 	$f = -3 * $a;
	// 	echo $f;
	// }

	// 26-masala

	// if ($a <= 0) {
	// 	$f = -1 * $a;
	// 	echo $f;
	// }
	// elseif (0 < $a) {
	// 	if ($a < 2) {
	// 		$f = pow($a, 2);
	// 		echo $f;
	// 	}
	// 	elseif ($a >= 2) {
	// 		$a = 4;
	// 		echo $a;
	// 	}
	// }
?>