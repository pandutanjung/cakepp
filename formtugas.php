<?php 
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas | Cakepp</title>
</head>
<body>
    <header>
        <h3>Tambah Tugas Kelasmu</h3>
    </header>

    <form action="prosestambahtugas.php" method="POST">
        <fieldset>
            <p>
                <label for="judul_tugas">Judul Tugas: </label>
                <input type="text" name="judul_tugas" placeholder="judul tugas" />
            </p>
            <p>
                <label for="pertemuan_id">Pertemuan: </label>
                <input list="pertemuan" name="pertemuan_id">
                <datalist id="pertemuan">
                    <?php
                        $pertemuan = pg_query("SELECT id FROM pertemuan");
                        while ($row = pg_fetch_assoc($pertemuan)) {
                           echo "<option value='" . $row['id'] . "'>";
                        }
                    ?>
                </datalist>
            </p>
            <p>
                <label for="nama_matkul">Mata Kuliah: </label>
                <input type="text" name="nama_matkul" placeholder="mata kuliah" />
            </p>
            <p>
                <label for="nama_bab">Bab: </label>
                <input type="text" name="nama_bab" placeholder="bab" />
            </p>
            <p>
                <label for="isi_tugas">Isi Tugas: </label>
                <textarea name="isi_tugas"></textarea>
            </p>
            <p>
                <label for="deadline">Deadline: </label>
                <input type="date" name="deadline" />
            </p>
            <p>
                <label for="kolom_link">Link Tempat Pengumpulan: </label>
                <input type="text" name="kolom_link" placeholder="link" />
            </p>
            <p>
                <input type="submit" value="Tambahkan" name="Tambah" />
            </p>
        </fieldset>
    </form>
</body>
</html>
