<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>After Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>After Dashboard</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    </head>
    <body>
    
        <div class="container">
            <div class="header">
                <div class="nav">
                    <div class="search">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="user">
                        <a href="#" class="btn"><i class="fas fa-layer-group"></i></a>
                        <a href="#" class="btn"><i class="fas fa-bell"></i></a>
                        <a href="#" class="btn"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="cards">
                <!-- Kartu-kartu -->
                <?php for ($i = 1; $i <= 14; $i++) { ?>
                    <div class="card">
                        <div class="box">
                            <h1>Aljabar Linear dan Komputasi<?php echo $i; ?><i class="fas fa-pencil-alt"></i></h1>
                            <form id="formMinggu<?php echo $i; ?>" class="notes-form">
                                <textarea name="notes" placeholder="Tambahkan catatan..."></textarea>
                                <button type="button" onclick="saveNotes(<?php echo $i; ?>)">Simpan Catatan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>Algoritme dan Pemrograman<?php echo $i; ?><i class="fas fa-pencil-alt"></i></h1>
                            <form id="formMinggu<?php echo $i; ?>" class="notes-form">
                                <textarea name="notes" placeholder="Tambahkan catatan..."></textarea>
                                <button type="button" onclick="saveNotes(<?php echo $i; ?>)">Simpan Catatan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>Pengantar Matematika dan Komputasi<?php echo $i; ?><i class="fas fa-pencil-alt"></i></h1>
                            <form id="formMinggu<?php echo $i; ?>" class="notes-form">
                                <textarea name="notes" placeholder="Tambahkan catatan..."></textarea>
                                <button type="button" onclick="saveNotes(<?php echo $i; ?>)">Simpan Catatan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>Rangkaian Digital<?php echo $i; ?><i class="fas fa-pencil-alt"></i></h1>
                            <form id="formMinggu<?php echo $i; ?>" class="notes-form">
                                <textarea name="notes" placeholder="Tambahkan catatan..."></textarea>
                                <button type="button" onclick="saveNotes(<?php echo $i; ?>)">Simpan Catatan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>Struktur Diskret<?php echo $i; ?><i class="fas fa-pencil-alt"></i></h1>
                            <form id="formMinggu<?php echo $i; ?>" class="notes-form">
                                <textarea name="notes" placeholder="Tambahkan catatan..."></textarea>
                                <button type="button" onclick="saveNotes(<?php echo $i; ?>)">Simpan Catatan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>Basis Data<?php echo $i; ?><i class="fas fa-pencil-alt"></i></h1>
                            <form id="formMinggu<?php echo $i; ?>" class="notes-form">
                                <textarea name="notes" placeholder="Tambahkan catatan..."></textarea>
                                <button type="button" onclick="saveNotes(<?php echo $i; ?>)">Simpan Catatan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>Teori Peluang<?php echo $i; ?><i class="fas fa-pencil-alt"></i></h1>
                            <form id="formMinggu<?php echo $i; ?>" class="notes-form">
                                <textarea name="notes" placeholder="Tambahkan catatan..."></textarea>
                                <button type="button" onclick="saveNotes(<?php echo $i; ?>)">Simpan Catatan</button>
                            </form>
                        </div>
                    </div>  
                        </div>
                    </div>
                <?php } ?>
            </div>  
                </div>
            </div>
        </div>
        <script>
            function saveNotes(weekNumber) {
                // Fungsi untuk menyimpan catatan, Anda dapat menyesuaikannya sesuai kebutuhan
                alert("Catatan untuk Minggu " + weekNumber + " disimpan!");
            }
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="notesPlusSidebar.css">
    
    <title>Sidebar</title>
</head>
<body>
    <div class="container">

        <div class="sidebar" id="sidebar">
            <div class="header-sidebar">
                <div class="list-item">
                    <div class="box-logo">
                        <a href="#">
                            <img src="assets\Logo.png" alt="" class="icon-logo">
                        </a>
                    </div>
                    
                </div>
            </div>

            <div class="main">
                <div class="list-item">
                    <div class="box">
                        <a href="index.html">
                            <img src="assets\dashboards.svg" alt="" class="icon">
                            <span class="description">Dashboard</span>
                        </a>
                    </div>
                    
                </div>
                <div class="list-item">
                    <div class="box">
                        <a href="notes.html">
    
                            <img src="assets\writing.svg"description class="icon">Notes</span>
                        </a>
                    </div>
                    
                </div>
                <div class="list-item">
                    <div class="box">
                        <a href="assignment.html">
    
                            <img src="assets\assignment.svg" alt="" class="icon">
                            <span class="description">Assignments</span>
                        </a>
                    </div>
                    
                </div>
                <div class="list-item">
                    <div class="box">
                        <a href="#">
    
                            <img src="assets\user.svg" alt="" class="icon">
                            <span class="description">Log Out</span>
                        </a>
                    </div>
                    
                </div>
    
    
            </div>
            
            

        </div>

        <div class="main-content">
            <div class="menu-button" id="menu-button">
                <input type="checkbox" id="menu-checkbox">
                <label for="menu-checkbox" id="menu-label">
                    <div class="hamburger" id="hamburger"></div>
                </label>
            </div>
        </div>


        </div>
    </div>
    <script src="sidebar.js"></script>
</body>
</html>


        </script>
    </body>
    </html>
    <script>
        function goToDashboard() {
            window.location.href = "index.html";
        }
    </script>
</body>
</html>
