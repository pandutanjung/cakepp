<?php
    include("config.php");
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = pg_query($db, "DELETE FROM pertemuan WHERE id = $id");

        if ($query == true) {
            header("Location: index.php");
            exit;
        } else {
            header("Location: index.php");
            exit;
        }
    } else {
        die("akses dilarang");
    }
?>