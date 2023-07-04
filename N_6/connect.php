<?php

	$server = 'localhost';
	$username = 'root';
	$password = '';
	$base = 'habibulloh';

	$connect = new mysqli($server, $username, $password, $base);

	if ($connect->connect_error) {
		die("Ulanishda xatolik");
	}

?>