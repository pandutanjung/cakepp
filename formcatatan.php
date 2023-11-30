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
            <form action="prosestambahcatatan.php" method="POST" id="form">
                <div class="input-field">
                    <div class="leftside">
                        <div class="title-left">
                            <label for="title-left">Title</label>
                            <input type="text" id="title-left" name="judul_catatan">
                        </div>
                        <div class="topic">
                            <label for="topic">Course</label>
                            <input type="text" id="topic" name="nama_matkul">
                        </div>
                        <div class="topic">
                            <label for="task">Chapter</label>
                            <input type="text" id="task" name="nama_bab">
                        </div>
                    </div>
                    <div class="rightside">
                        <div class="subject">
                            <label for="subject">Week</label>
                            <input list="pertemuan" name="pertemuan_ke">
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
                    </div>
                </div>
                <div class="input-field-main">
                    <div class="notes">
                        <h3>Notes</h3>
                        <textarea type="text" id="notes" rows="25" placeholder="Write your note here!!" name="isi_catatan"></textarea>
                    </div>
                    <div class="link-list">
                        <h3>Link</h3>
                        <textarea type="text" id="link-list" rows="25" placeholder="Type the links or sources!!" name="kolom_link"></textarea>
                    </div>
                </div>

                <button type="submit" name="tambah">Save</button>
                <a href="daftarcatatan.php" id="back">Back</a>
            </form>
            
        </div>

        

    </div>
    
    <script src="notes.js"></script>

</body>
</html>
