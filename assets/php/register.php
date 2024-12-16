<?php
    require_once '../../config.php';

    $fname = $_POST['fullname'];
    $passkey = $_POST['passkey'];

    $sql = "INSERT INTO users (`username`, `password`) VALUES ('$fname', PASSWORD('$passkey'))";
    $result = mysqli_query($connect, $sql);

    if (!$result){
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } else {
        echo "New record created successfully";
        setcookie("username", $fname, time() + (86400 * 30), "/");
        header("Location: ../../index.php");
    }
?>