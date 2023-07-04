<?php 
	$a = $_POST['a'];
	$b = $_POST['b'];


	$server = "localhost";
	$user = "root";
	$password ="";
	$base = "$a";

	$connect = new mysqli($server, $user, $password, $base);
	if ($connect->connect_error) {
		die("Ulanishda xatolik"."<br>");
	}
	else {
		echo "Ulanishda xatolik yo'q"."<br>";
	}

	$creat = "CREATE TABLE $b (
		name varchar (255),
	    surname varchar (255),
	    age INT (115)
	);";
	if ($connect->query($creat) === TRUE) {
	  	echo "Jadval yaratildi"."<br>";
	}
	else {
	  	echo "Jadval yaratishda xatolik"."$connect->error"."<br>";
	}

?>