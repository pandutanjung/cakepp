<?php
    include("config.php");
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = pg_query($db, "DELETE FROM tugas WHERE id = $id");

        if ($query == true) {
            echo "<script>
                alert('Tugas berhasil dihapus')
            </script>";
            header("Location: daftartugas.php");
            exit;
        } else {
            echo "<script>
                alert('Tugas berhasil dihapus')
            </script>";
            header("Location: daftartugas.php");
            exit;
        }
    } else {
        die("akses dilarang");
    }
?>