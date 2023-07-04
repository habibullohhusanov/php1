<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>i_4.php</title>
	<link rel="stylesheet" type="text/css" href="in.css">
	<link rel="stylesheet" type="text/css" href="i_1.css">
	<link rel="stylesheet" type="text/css" href="i_2.css">
	<link rel="stylesheet" type="text/css" href="i_3.css">
</head>
<body>
	<nav>
		<a href="#next">&DownArrow;</a>
	</nav>
	<form action="ig.php" method="POST">
		<h2>Type: DB -- Data base, T -- Table, I -- information</h2>
		<input type="text" name="a" placeholder="Type" max="3">
		<br>
		<br>
		<input type="text" name="b" placeholder="Data base Name" maxlength="25">
		<br>
		<br>
		<label>It is not necessary to write the name of the table only if the database is deleted</label>
		<br>
		<br>
		<input type="text" name="c" placeholder="Table name" maxlength="25">
		<br>
		<br>
		<label>It is not necessary to write information only if the database or table is deleted</label>
		<br>
		<br>
		<input type="text" name="d" placeholder="Information, name" maxlength="25">
		<br>
		<br>
		<button>OK</button>
	</form>
	<section id="next">
		<div>
			<a href="index.php">Home</a>
			<a href="i_1.php">New Data base</a>
			<a href="i_2.php">New Table</a>
			<a href="i_3.php">Add Table information</a>
			<a href="i_5.php">Edit</a>
		</div>
	</section>
</body>
</html>