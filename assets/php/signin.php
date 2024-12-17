<?php
    require_once '../../config.php';

    if (isset($_COOKIE['username'])){
        header("Location: ../../index.php");
    } else {
        function checkUser($username, $password) {
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = PASSWORD('$password')";
            $result = mysqli_query($connect, $sql);
            return $result;
        }
        if (!checkUser($_POST['username'], $_POST['passkey'])){
            header("Location: ../../SignIn.php");
        } else {
           confirm("Login Successful");
            setcookie("username", $_POST['username'], time() + (86400 * 30), "/");
            header("Location: ../../index.php");
        }

    }
?>