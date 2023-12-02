<?php
    include("config.php");
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = pg_query($db, "DELETE FROM catatan WHERE id = $id");

        if ($query == true) {
            echo "<script>
                alert('Catatan berhasil dihapus')
            </script>";
            header("Location: daftarcatatan.php");
            exit;
        } else {
            echo "<script>
                alert('Catatan gagal dihapus')
            </script>";
            header("Location: daftarcatatan.php");
            exit;
        }
    } else {
        die("akses dilarang");
    }
?>