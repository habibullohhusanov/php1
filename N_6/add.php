<?php

	require_once "connect.php";

	$a = $_POST['name'];
	$b = $_POST['surname'];
	$c = $_POST['age'];

	$sql = "INSERT INTO `about`(`name`, `surname`, `age`) VALUES ('$a','$b','$c')";

	if ($connect->query($sql) === TRUE) {
	  	header('location: index.php');
	} else {
	  	header('location: display.php');
	}

?>