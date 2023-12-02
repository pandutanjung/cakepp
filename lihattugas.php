<?php
    include('config.php');
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = pg_query($db, "SELECT * FROM tugas WHERE id = $id");
        $data = pg_fetch_array($query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/realease/v4.0.0/css/line.css">
    <link rel="stylesheet" href="form_tugas.css">
    
</head>
<body>
    <div class="container">
        <div class="flex-container">
            <div class="header">
            </div>
            <div class="flex-box">
                <h2>My Tasks</h2> 
            </div>
            
            <div class="new-assignment">
                <div class="assignment-box">
                    <div class="input-field">
                        <div class="form-assignment">
                            <form action="prosesedittugas.php?id_new=<?=$id;?>" method="POST">
                            <input type="hidden" name="id" value="<?php $data['id'];?>">
                            <input type="hidden" name="akun_username" value="<?php $data['akun_username'];?>">
                                <div class="input-field">
                                    <div class="title">
                                        <label for="title">Title </label>
                                        <input type="text" id="title" name="judul_tugas" value="<?= $data['judul_tugas']; ?>" required >
                                    </div>
                                    <div class="week">
                                        <label for="week">Week </label>
                                        <input list="pertemuan" name="pertemuan_ke" value="<?= $data['pertemuan_ke']; ?>">
                                        <datalist id="pertemuan">
                                            <option value="1">
                                            <option value="2">
                                            <option value="3">
                                            <option value="4">
                                            <option value="5">
                                            <option value="6">
                                            <option value="7">
                                            <option value="8">
                                            <option value="9">
                                            <option value="10">
                                            <option value="11">
                                            <option value="12">
                                            <option value="13">
                                            <option value="14">
                                        </datalist>
                                    </div>
                                    <div class="course">
                                        <label for="course">Course </label>
                                        <input type="text" id="course" name="nama_matkul" value="<?= $data['nama_matkul']; ?>">
                                    </div>
                                    <div class="chapter">
                                        <label for="chapter">Chapter </label>
                                        <input type="text" id="chapter" name="nama_bab" value="<?= $data['nama_bab']; ?>">
                                    </div>
                                    <div class="deadline">
                                        <label for="chapter">Deadline </label>
                                        <input type="date" id="deadline" name="deadline_tugas" value="<?= $data['deadline_tugas']; ?>">
                                    <div class="task-link">
                                        <label for="link">Link </label>
                                        <input type="text" id="task-link" name="kolom_link" value="<?= $data['kolom_link']; ?>">
                                    </div>
                                    <div class="desc">
                                        <label for="link">Description </label>
                                        <textarea name="desc" cols="30" rows="10" name="deskripsi_tugas"><?= $data['deskripsi_tugas']; ?></textarea>
                                    </div>
                                </div>
                                <div class="button-task">
                                    
                                </div>
                                <?php
                                $username = $_SESSION['username'];
                                $id = $_GET['id'];
                                $pertemuan_ke_query = pg_query($db,"SELECT pertemuan_ke FROM tugas WHERE akun_username = '$username' AND id = $id");
                                $row = pg_fetch_assoc($pertemuan_ke_query);
                                $pertemuan_ke = $row['pertemuan_ke'];
                                $pertemuan = pg_query($db, "SELECT id FROM pertemuan WHERE akun_username = '$username' AND pertemuan_ke = '$pertemuan_ke'");
                                $pertemuan_fetch = pg_fetch_assoc($pertemuan);
                                $page_pertemuan = $pertemuan_fetch['id'];
                            ?>
                                <a href="lihatweek.php?id=<?=$page_pertemuan?>" id="back">Back</a>
                            </form>
                            
                        </div>
                    </div>               
                </div>
        </div>
    </div>

</body>
</html>