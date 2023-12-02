<?php 
    include("config.php");
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    if (isset($_POST['tambah'])) {
        $username = $_SESSION['username'];
        $judul = $_POST['judul_catatan'];
        $pertemuan = $_POST['pertemuan_ke'];
        $matkul = $_POST['nama_matkul'];
        $bab = $_POST['nama_bab'];
        $isi = $_POST['isi_catatan'];
        $link = $_POST['kolom_link'];

        $catatan_query = pg_query("INSERT INTO catatan(akun_username, judul_catatan, pertemuan_ke, nama_matkul, nama_bab, isi_catatan, kolom_link) VALUES('$username', '$judul', $pertemuan, '$matkul', '$bab', '$isi', '$link')");
        if ($catatan_query) {
            header("Location: daftarcatatan.php?status_tambah_catatan=sukses");
        } else {
            header("Location: daftarcatatan.php?status_tambah_catatan=gagal");
        }
    } else {
        die("Akses Dilarang");        
    }
?>
