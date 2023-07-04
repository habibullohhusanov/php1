<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    
    <div class="addcom">
        <h1>Add comment</h1>
        <form action="send.php" method="POST">
            <input type="text" name="comment">
            <button>Submit</button>
        </form>
    </div>

    <div class="com">
        <?php

            require_once "connect.php";

            $sql = "SELECT * FROM comment";

            if ($result = mysqli_query($connect, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<p>" . $row['com'] ."</p><button><a href="."delete.php?"."></a></button>";
                    }
                    mysqli_free_result($result);
                } else {
                    echo "<h1><i>NO COMMENT</i></h1>";
                }
            } else {
                echo "<h1>Jo'natilmadi</h1>";
            }



        ?>
    </div>


</body>
</html>