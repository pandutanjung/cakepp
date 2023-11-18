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