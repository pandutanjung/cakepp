<?php

    include "config.php";

    $id = $_GET["id"];
    $result = mysqli_query($mysqli, "DELETE FROM catatan WHERE id = $id");

    if( $result ){
        header("location: index.php");
    } else{
        die("Gagal Menghapus Catatan");
    }
    
?>