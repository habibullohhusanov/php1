<?php

    require_once "connect.php";

    if (isset($_GET['updateid'])) {
        $idd = $_GET['updateid'];
    }
    $send = "SELECT * FROM `about` WHERE id='$idd'";
    $result = mysqli_query($connect, $send);

   
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $surname = $row['surname'];
    $age = $row['age'];
    
    if (isset($_POST['submit'])) {
        $aa = $_POST['namee'];
        $ba = $_POST['surnamee'];
        $ca = $_POST['agee'];

        $sql = "UPDATE `about` SET `name`='$aa',`surname`='$ba',`age`='$ca' WHERE `id`='$idd'";

        if ($connect->query($sql) === TRUE) {
            header('location: index.php');
        }
    }

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit</title>
    <link rel="stylesheet" type="text/css" href="css1.css">
    <link rel="stylesheet" type="text/css" href="css3.css">
    </head>
    <body>
        <div>
            <form method="POST">
                <input type="text" name="namee" placeholder="Name" value=<?php echo $name;?>>
                <br>
                <br>
                <input type="text" name="surnamee" placeholder="Surname" value=<?php echo $surname;?>>
                <br>
                <br>
                <input type="text" name="agee" placeholder="Age" value=<?php echo $age;?>>
                <br>
                <br>
                <button name="submit">OK</button>
            </form>
        </div>
    </body>
    </html>