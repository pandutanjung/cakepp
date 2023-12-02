<?php 
    include("config.php");
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    } 
    if (isset($_POST['tambah'])) {
        $username = $_SESSION['username'];
        $pertemuan = $_POST['pertemuan_ke'];
        $pertemuan_ke = pg_query($db, "SELECT COUNT(*) as jumlah FROM pertemuan WHERE akun_username = '$username' AND pertemuan_ke = '$pertemuan'");
        $row = pg_fetch_assoc($pertemuan_ke);
        $jumlah = $row['jumlah'];
        if ($jumlah > 0) {
            header("Location: index.php?status=week_sudah_ada");
            exit;
        } else {
            $tugas_query = pg_query("INSERT INTO pertemuan(akun_username, pertemuan_ke) VALUES('$username', '$pertemuan')");
            if ($tugas_query) {
                header("Location: index.php?status_tambah_pertemuan=sukses");
            } else {
                header("Location: index.php?status_tambah_pertemuan=gagal");
            }
        }
    } else {
        die("Akses Dilarang");        
    }
?>
