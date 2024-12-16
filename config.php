<?php
    $Sname = "localhost";
    $Uname = "root";
    $Pass = "";
    $DB = "coffee_shop";

    $connect = new mysqli($Sname, $Uname, $Pass, $DB);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    };
?>