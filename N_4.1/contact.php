<?php 

	$server = "localhost";
	$user = "root";
	$password ="";

	$connect = new mysqli($server, $user, $password);
	if ($connect->connect_error) {
		die("Ulanishda xatolik"."<br>");
	}
	else {
		echo "Ulanishda xato yo'q"."<br>";
	}

	$a = $_POST['a'];



	$send = "CREATE DATABASE $a";
	if ($connect->query($send) === TRUE) {
	  	echo "Yangi baza yaratildi";
	}
	else {
	  	echo "Yangi baza yaratshda xatolik: " . $send . "<br>" . $connect->error;
	}

?>