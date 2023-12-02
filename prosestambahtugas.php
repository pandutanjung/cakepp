<?php 
    include("config.php");
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    } 
    if (isset($_POST['tambah'])) {
        $username = $_SESSION['username'];
        $judul = $_POST['judul_tugas'];
        $pertemuan = $_POST['pertemuan_ke'];
        $matkul = $_POST['nama_matkul'];
        $bab = $_POST['nama_bab'];
        $deskripsi = $_POST['deskripsi_tugas'];
        $deadline = $_POST['deadline_tugas'];
        $link = $_POST['kolom_link'];

        $tugas_query = pg_query("INSERT INTO tugas(akun_username, judul_tugas, pertemuan_ke, nama_matkul, nama_bab, deskripsi_tugas, deadline_tugas, kolom_link) VALUES('$username', '$judul', $pertemuan, '$matkul', '$bab', '$deskripsi', '$deadline', '$link')");
        if ($tugas_query) {
            header("Location: daftartugas.php?status_tambah_tugas=sukses");
        } else {
            header("Location: daftartugas.php?status_tambah_tugas=gagal");
        }
    } else {
        die("Akses Dilarang");        
    }
?>
