<?php 
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan | Cakepp</title>
</head>
<body>
    <header>
        <h3>Tambah Catatan Kelasmu</h3>
    </header>

    <form action="prosestambahcatatan.php" method="POST">
        <fieldset>
            <p>
                <label for="judul_catatan">Judul Catatan: </label>
                <input type="text" name="judul_catatan" placeholder="judul catatan" />
            </p>
            <p>
                <label for="pertemuan_id">Pertemuan: </label>
                <input list="pertemuan" name="pertemuan_id">
                <datalist id="pertemuan">
                    <?=
                        $pertemuan = pg_query("SELECT id FROM pertemuan");
                        while (1) {
                           echo "<option value='$pertemuan'>";
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
                <label for="isi_catatan">Isi Catatan: </label>
                <textarea name="isi_catatan"></textarea>
		    </p>
            <p>
                <label for="kolom_link">Link: </label>
                <input type="text" name="kolom_link" placeholder="link" />
            </p>
            <p>
			    <input type="submit" value="Tambahkan" name="Tambah" />
		    </p>
        </fieldset>
    </form>
</body>
</html>