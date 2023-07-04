<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>i_3.php</title>
	<link rel="stylesheet" type="text/css" href="in.css">
	<link rel="stylesheet" type="text/css" href="i_1.css">
	<link rel="stylesheet" type="text/css" href="i_3.css">
</head>
<body>
	<nav>
		<a href="#next">&DownArrow;</a>
	</nav>
	<form action="is.php" method="POST">
		<input type="text" name="g" placeholder="Data base name" maxlength="25">
		<br>
		<br>
		<input type="text" name="d" placeholder="Table name" maxlength="25">
		<br>
		<br>
		<input type="text" name="a" placeholder="Name" maxlength="25">
		<br>
		<br>
		<input type="text" name="b" placeholder="Surname" maxlength="25">
		<br>
		<br>
		<input type="number" name="c" placeholder="Age">
		<br>
		<br>
		<button>OK</button>
	</form>
	<section id="next">
		<div>
			<a href="index.php">Home</a>
			<a href="i_1.php">New Data base</a>
			<a href="i_2.php">New Table</a>
			<a href="i_4.php">Delete</a>
			<a href="i_5.php">Edit</a>
		</div>
	</section>
</body>
</html>