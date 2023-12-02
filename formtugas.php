<?php
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
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
                            <form action="prosestambahtugas.php" method="POST">
                                <div class="input-field">
                                    <div class="title">
                                        <label for="title">Title </label>
                                        <input type="text" id="title" name="judul_tugas" required >
                                    </div>
                                    <div class="week">
                                        <label for="week">Week </label>
                                        <input list="pertemuan" name="pertemuan_ke">
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
                                        <input type="text" id="course" name="nama_matkul">
                                    </div>
                                    <div class="chapter">
                                        <label for="chapter">Chapter </label>
                                        <input type="text" id="chapter" name="nama_bab">
                                    </div>
                                    <div class="deadline">
                                        <label for="chapter">Deadline </label>
                                        <input type="date" id="deadline" name="deadline_tugas">
                                    <div class="task-link">
                                        <label for="link">Link </label>
                                        <input type="text" id="task-link" name="kolom_link">
                                    </div>
                                    <div class="desc">
                                        <label for="link">Description </label>
                                        <textarea name="desc" cols="30" rows="10" name="deskripsi_tugas"></textarea>
                                    </div>
                                </div>
                                <div class="button-task">
                                    
                                </div>
                                <button type="submit" name="tambah">Save</button>
                                <a href="daftartugas.php" id="back">Back</a>
                                
                            </form>
                            
                        </div>
                    </div>               
                </div>
        </div>
    </div>

</body>
</html>