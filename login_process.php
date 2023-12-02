<?php
    include("config.php");
    session_start();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = pg_query($db, "SELECT * FROM akun WHERE username = '$username'"); 
        if (pg_num_rows($result) === 1) {
            $row = pg_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                $_SESSION['username'] = $username;
                header("Location: index.php?status_login=success");
                exit;
            } else {
                header("Location: login.php?status_login=failed");
            }
        }
    }
?>