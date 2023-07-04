<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="css1.css">
    <link rel="stylesheet" type="text/css" href="css2.css">
</head>
<body>

    <div>
        <button id="but"><a href="display.php">Add</a></button>
    </div>
   
    <?php

    require_once "connect.php";
    
    $sql = "SELECT * FROM about";

    if($result = mysqli_query($connect, $sql)){
        if(mysqli_num_rows($result) > 0){
            echo '<table width="100%" cellpadding="20" cellspacing="5">';
                echo "<thead>";
                    echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<th>Surname</th>";
                        echo "<th>Age</th>";
                        echo "<th>Delete & Update</th>";
                    echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr align='center'>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['surname'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td><button><a href="."delete.php?deleteid=" . $row['id'] . "".">Delete</a></button>";
                        echo "<button><a href="."update.php?updateid=" . $row['id'] . "".">Update</a></button></td>";
                    echo "</tr>";
                }
                echo "</tbody>";                            
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "Xato bor yoki ma'lumot yo'q";
        }
    } else{
        echo "Ulanishda xatolik";
    }

    mysqli_close($connect);

    ?>           
</body>
</html>