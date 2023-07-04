<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<style type="text/css">
		* {
			box-sizing: border-box;
		}
		::selection {
			background-color: white;
			color: red;
		}
		body {
			padding: 0;
			margin: 0;
			background-color: #24262b;
		}
		table {
			width: 98%;
			margin: 1%;
			border: none;
		}
		th, td {
			background-color: #3a486b;
			color: white;
			border: 2px solid white;
			border-radius: 30px;
		}
		th {
			border-radius: 20px;
		}
	</style>
</head>
<body>

	<?php 

		require_once "contact.php";

		$cust = "SELECT * FROM about";
		if ($n = mysqli_query($connect, $cust)) {
			if (mysqli_num_rows($n) > 0) {
				echo "<table border='5' cellpadding='20' cellspacing='5'>";
					echo "<tr>";
						echo "<th>Name</th>";
						echo "<th>Surname</th>";
						echo "<th>Age</th>";
						echo "<th>Delet & Edit</th>";
					echo "</tr>";
				while ($a = mysqli_fetch_array($n)) {
					echo "<tr>";
						echo "<td>".$a['name']."</td>";
						echo "<td>".$a['surname']."</td>";
						echo "<td>".$a['age']."</td>";
						echo "<td>"."<button>Delete</button>"."<button>Edit</button>"."</td>";
					echo "</tr>";
				}
				echo "</table>";
				mysqli_free_result($n);
			}
			else {
				echo "Ma'lumot olishda xatolik...1";
			}
		}
		else {
			echo "Ma'lumot olishda xatolik...2";
		}

	?>

</body>
</html>