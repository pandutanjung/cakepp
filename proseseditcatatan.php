<?php
    include("config.php");

    session_start();

    if (isset($_POST['simpan'])) {

        if (isset($_GET['id_new'])) {
            $idnew = $_GET['id_new'];
        }
        $judul = $_POST['judul_catatan'];
        $pertemuan = $_POST['pertemuan_ke'];
        $matkul = $_POST['nama_matkul'];    
        $bab = $_POST['nama_bab'];
        $isi = $_POST['isi_catatan'];
        $link = $_POST['kolom_link'];

        $query = pg_query($db,"UPDATE catatan SET judul_catatan='$judul', pertemuan_ke='$pertemuan', nama_matkul='$matkul', nama_bab='$bab', isi_catatan='$isi', kolom_link='$link' WHERE id='$idnew'");
        
        if ($query) {        
            header("Location: daftarcatatan.php?status_simpan=sukses");
        } else {
            header("Location: daftarcatatan.php?status_simpan=gagal");
        }
    } else {
        die('akses dilarang');
    }
?>