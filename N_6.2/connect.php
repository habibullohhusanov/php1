<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $base = "habibulloh";

    $connect = new mysqli ($server, $user, $password, $base);
    if ($connect->connect_error) {
        die("Ulanishda xatolik");
    }

?>