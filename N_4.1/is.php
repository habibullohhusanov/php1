<?php 
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];
	$g = $_POST['g'];


	if ($c <= 150) {
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

		$send = "INSERT INTO `$d`(`name`, `surname`, `age`) VALUES ('$a','$b','$c')";
		if ($connect->query($send) === TRUE) {
		  	echo "Ma'lumot kiritildi";
		}
		else {
		  	echo "Ma'lumot kiritishda xatolik	: " . $send . "<br>" . $connect->error;
		}
	}
	else {
		echo "Yosh juda katta. Buni to'g'irlab qaytadan urinib ko'ring.";
	}

?>