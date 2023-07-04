<?php

	require_once "connect.php";

	$send = "SELECT * FROM mmm";

	$result = mysqli_query($connect, $send);

	$row = mysqli_fetch_array($result);

	$id = $row['id'];

	if (isset($_GET['submit'])) {

		$idd = $id + 1;

        $sql = "UPDATE `mmm` SET `id`='$idd' WHERE `id`='$id'";

        if ($connect->query($sql) === TRUE) {
        	
            header('location: index.php');

        } else {
        	echo "Xatolik" . connect_error;
        }
	
	}

?>