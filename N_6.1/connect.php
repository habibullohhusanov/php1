<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$base = "habibulloh";

	$connect = new mysqli ($server, $user, $password, $base);

	if ($connect->connect_error) {
		die("Ulanishda xatolik");
	} else {
		// echo "Muaffaqiyatli ulandi";
	}

	$send = "SELECT * FROM mmm";

	$result = mysqli_query($connect, $send);

	$row = mysqli_fetch_array($result);

	$id = $row['id'];

?>