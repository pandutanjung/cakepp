<?php
    include("config.php");
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = pg_query($db, "SELECT * FROM catatan WHERE id = $id");
        $data = pg_fetch_array($query);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/realease/v4.0.0/css/line.css">
    <link rel="stylesheet" href="form_catatan.css">
    
    <title>Catatan | Cakepp</title>
</head>
<body>
    <div class="flex-container">
        <div class="header">
        </div>
        <div class="flex-box">
            <h2>My Notes</h2> 
        </div>
        <div class="formtop">
            <form action="proseseditcatatan.php?id_new=<?=$id;?>" method="POST" id="form">
            <input type="hidden" name="id" value="<?php $data['id'];?>">
            <input type="hidden" name="akun_username" value="<?php $data['akun_username'];?>">
                <div class="input-field">
                    <div class="leftside">
                        <div class="title-left">
                            <label for="title-left">Title</label>
                            <input type="text" id="title-left" name="judul_catatan" value="<?= $data['judul_catatan']; ?>">
                        </div>
                        <div class="topic">
                            <label for="topic">Course</label>
                            <input type="text" id="topic" name="nama_matkul" value="<?=$data['nama_matkul'];?>">
                        </div>
                        
                    </div>
                    <div class="rightside">
                        <div class="subject">
                            <label for="subject">Week</label>
                            <input list="pertemuan" name="pertemuan_ke"  value="<?= $data['pertemuan_ke']; ?>">
                            <datalist id="pertemuan">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                            </datalist>
                        </div>
                        <div class="topic">
                            <label for="task">Chapter</label>
                            <input type="text" id="task" name="nama_bab" value="<?=$data['nama_bab'];?>">
                        </div>
                    </div>
                </div>
                <div class="input-field-main">
                    <div class="notes">
                        <label>Notes</label>
                        <textarea type="text" id="notes" rows="25" placeholder="Write your note here!!" name="isi_catatan"><?=$data['isi_catatan'];?></textarea>
                    </div>
                    <div class="link-list">
                        <label>Link</label>
                        <textarea type="text" id="link-list" rows="25" placeholder="Type the links or sources!!" name="kolom_link"><?=$data['kolom_link'];?></textarea>
                    </div>
                </div>

                <div class="all-button">
                <?php
                                $username = $_SESSION['username'];
                                $id = $_GET['id'];
                                $pertemuan_ke_query = pg_query($db,"SELECT pertemuan_ke FROM catatan WHERE akun_username = '$username' AND id = $id");
                                $row = pg_fetch_assoc($pertemuan_ke_query);
                                $pertemuan_ke = $row['pertemuan_ke'];
                                $pertemuan = pg_query($db, "SELECT id FROM pertemuan WHERE akun_username = '$username' AND pertemuan_ke = '$pertemuan_ke'");
                                $pertemuan_fetch = pg_fetch_assoc($pertemuan);
                                $page_pertemuan = $pertemuan_fetch['id'];
                ?>
                <a href="lihatweek.php?id=<?=$page_pertemuan?>" id="back">Back</a>
                </div>

                
            </form>
            
        </div>

        

    </div>
    
    <script src="notes.js"></script>

</body>
</html>
