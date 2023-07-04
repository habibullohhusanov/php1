<?php 
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];


	if ($a == "DB") {
		$server = "localhost";
		$user = "root";
		$password ="";

		$connect = new mysqli($server, $user, $password);
		if ($connect->connect_error) {
			die("Ulanishda xatolik"."<br>");
		}
		else {
			echo "Ulanishda xatolik yo'q"."<br>";
		}

		$send = "DROP DATABASE $b;";
		if ($connect->query($send) === TRUE) {
		  	echo "Baza o'chirildi";
		}
		else {
		  	echo "Baza o'chirilmadi	: " . $send . "<br>" . $connect->error;
		}
	}
	elseif ($a == "T") {
		$server = "localhost";
		$user = "root";
		$password ="";
		$base = "$b";

		$connect = new mysqli($server, $user, $password, $base);
		if ($connect->connect_error) {
			die("Ulanishda xatolik"."<br>");
		}
		else {
			echo "Ulanishda xatolik yo'q"."<br>";
		}

		$send = "DROP TABLE $c;";
		if ($connect->query($send) === TRUE) {
		  	echo "Jadval o'chirildi";
		}
		else {
		  	echo "Jadval o'chirilmadi	: " . $send . "<br>" . $connect->error;
		}
	}
	elseif ($a == "I") {
		$server = "localhost";
		$user = "root";
		$password ="";
		$base = "$b";

		$connect = new mysqli($server, $user, $password, $base);
		if ($connect->connect_error) {
			die("Ulanishda xatolik"."<br>");
		}
		else {
			echo "Ulanishda xatolik yo'q"."<br>";
		}

		$send = "DELETE FROM `$c` WHERE name='$d';";
		if ($connect->query($send) === TRUE) {
		  	echo "Ma'lumot o'chirildi";
		}
		else {
		  	echo "Ma'lumot o'chirilmadi	: " . $send . "<br>" . $connect->error;
		}
	}

?>