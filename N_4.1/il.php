<?php 
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$g = $_POST['g'];
	$e = $_POST['e'];



	$server = "localhost";
	$user = "root";
	$password ="";
	$base = "$g";

	$connect = new mysqli($server, $user, $password, $base);
	if ($connect->connect_error) {
		die("Ulanishda xatolik"."<br>");
	}
	else {
		echo "Ulanishda xatolik yo'q"."<br>";
	}

	$send = "UPDATE `$d` SET `name`='$a',`surname`='$b',`age`='$c' WHERE name='$e'";
	if ($connect->query($send) === TRUE) {
		  echo "Ma'lumot to'g'irlandi";
	}
	else {
		  echo "Ma'lumot to'g'irlashda xatolik	: " . $send . "<br>" . $connect->error;
	}

?>