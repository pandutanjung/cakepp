<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan | Cakepp</title>
</head>
<body>
    <header>
        <h3>Daftar Catatan</h3>
    </header>

    <table border="1">
    <thead>
		<tr>
			<th>Judul Catatan</th>
			<th>Mata Kuliah</th>
			<th>Bab</th>
			<th>Tindakan</th>
		</tr>
	</thead>
    <tbody>
        <?php
            $query = pg_query($db, "SELECT * FROM catatan");

            while ($catatan = pg_fetch_array($query)) {
                echo "<tr>";
                    echo"<td>".$catatan['judul_catatan']."</td>";
                    echo"<td>".$catatan['nama_matkul']."</td>";
                    echo"<td>".$catatan['nama_bab']."</td>";
                    echo"<td>";
                        "<a href='formedit.php?id=".$catatan['id']."'>Buka</a>";
                        "<a href='hapus.php?id=".$catatan['id']."'>Hapus</a>";   
                    echo"</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
    <nav>
        <a href="formcatatan.php">Tambah Catatan</a>
    </nav>
</body>
</html>