<?php
    include("config.php");
    session_start();

    if (isset($_POST['regist'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_confirmation = $_POST['password_confirmation'];
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $result = pg_query($db, "SELECT username FROM akun WHERE username = '$username'");
        if (pg_fetch_assoc($result)) {
            header("Location: login.php?=username_is_already_registered");
        }

        if ($password !== $password_confirmation) {
            header("Location: login.php?=confirm_password_incorrect");
        } 
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = pg_query($db,"INSERT INTO akun VALUES('$username', '$password')");
        if ($query == TRUE) {   
            header("Location: login.php?=success");
        } else {
            header("Location: login.php?=failed");
        }
    }
?>