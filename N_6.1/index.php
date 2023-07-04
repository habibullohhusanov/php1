<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		body {
			margin: 0;
			padding: 0;
			background-color: #24262b;
		}
		img {
			transition: 0.5s;
			width: 70%;
			margin-left: 15%;
			margin-right: 15%;
		}
		form {
			/*display: flex;
			justify-content: center;*/
			width: 50%;
			margin-left: 25%;
			margin-right: 25%;

		}
		button {
			background-color: #24262b;
			font-size: 35px;
			float: left;
		}
	</style>
</head>
<body>
	<form action="like.php">
		<img src="bbn.jpg">
		<button name="submit"><i class='bx bxs-like'></i></button>
		
		<?php

			require_once "connect.php";

			echo "<h1>" . $row['id'] ."</h1>";

		?>

	</form>
</body>
</html>