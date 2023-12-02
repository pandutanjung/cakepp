<?php
    include("config.php");

    session_start();

    if (isset($_POST['simpan'])) {

        if (isset($_GET['id_new'])) {
            $idnew = $_GET['id_new'];
        }
        $judul = $_POST['judul_tugas'];
        $pertemuan = $_POST['pertemuan_ke'];
        $matkul = $_POST['nama_matkul'];
        $bab = $_POST['nama_bab'];
        $deskripsi = $_POST['deskripsi_tugas'];
        $deadline = $_POST['deadline_tugas'];
        $link = $_POST['kolom_link'];

        $query = pg_query($db,"UPDATE tugas SET judul_tugas='$judul', pertemuan_ke='$pertemuan', nama_matkul='$matkul', nama_bab='$bab', deskripsi_tugas='$isi', deadline_tugas='$deadline', kolom_link='$link' WHERE id='$idnew'");
        
        if ($query) {        
            header("Location: daftartugas.php?status_simpan=sukses");
        } else {
            header("Location: daftartugas.php?status_simpan=gagal");
        }
    } else {
        die('akses dilarang');
    }
?>