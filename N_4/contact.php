<?php 

	$server = "localhost";
	$user = "root";
	$password ="";
	$base = "habibulloh";

	$connect = new mysqli($server, $user, $password, $base);
	if ($connect->connect_error) {
		die("Error"."<br>");
	}
	else {
		echo "Xato yo'q"."<br>";
	}

	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
	$d = $_POST['d'];

	// jadval yaratish

	// $creat = "CREATE TABLE $d (
	// 	name varchar (255),
	//     surname varchar (255),
	//     age INT (115)
	// )";
	// if ($connect->query($creat) === TRUE) {
	//   	echo "Jadval yaratildi"."<br>";
	// }
	// else {
	//   	echo "Jadval yaratishda xatolik"."$connect->error"."<br>";
	// }

	// jadvalga ma'lumot kiritish

	$send = "INSERT INTO `$d`(`name`, `surname`, `age`) VALUES ('$a','$b','$c')";
	if ($connect->query($send) === TRUE) {
	  	echo "Kirirtildi";
	}
	else {
	  	echo "Xatolik: " . $send . "<br>" . $connect->error;
	}
?>