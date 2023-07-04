<?php

	require_once "connect.php";

	if (isset($_GET['deleteid'])) {
		$id = $_GET['deleteid'];
	}
	
	$sql = "DELETE FROM `about` WHERE id = '$id'";

	if ($connect->query($sql) === TRUE) {
	  	header('location: index.php');
	} else {
		echo "Error";
		echo $idd;
	}

?>