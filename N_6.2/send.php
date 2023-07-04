<?php

    require_once "connect.php";

    $comment = $_POST['comment'];

    $sql = "INSERT INTO `comment`(`com`) VALUES ('$comment');";

    if ($connect->query($sql) === TRUE) {
        header('location: index.php');
    } else {
        echo "Yuborishda xatolik";
    }

?>