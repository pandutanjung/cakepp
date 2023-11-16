<?php
include("config.php");

// Ambil data tugas dari database
$query = "SELECT * FROM tugas";
$result = pg_query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas | Cakepp</title>
</head>
<body>
    <header>
        <h3>Daftar Tugas </h3>
    </header>

    <table border="1">
        <thead>
            <tr>
                <th>Judul Tugas</th>
                <th>Pertemuan</th>
                <th>Mata Kuliah</th>
                <th>Bab</th>
                <th>Isi Tugas</th>
                <th>Deadline</th>
                <th>Link Tempat Pengumpulan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = pg_fetch_assoc($result)) {
       
