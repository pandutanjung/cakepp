<?php
    $db = pg_connect('host=localhost dbname=cakepp user=postgres password=postgres');
    if (!$db) {
        die("Gagal terkoneksi ke database: " . pg_connect_error());
    }
?>