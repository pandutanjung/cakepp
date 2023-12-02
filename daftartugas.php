<?php
include("config.php");
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas | Cakepp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <style>
        body {
            padding-top: 56px; /* Adjusted to avoid overlap with fixed-top navbar */
        }
    </style>
  </head>
  <body>
    <!-- navbar - tugas -->
    <nav class="navbar bg-body-tertiary bg-info-subtle fixed-top mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cakepp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Cakepp</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="daftarcatatan.php">Catatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="daftartugas.php">Tugas</a>
                  </li>
              </ul>
              <form class="d-flex mt-3">
              <a href="keluar.php" class="btn btn-outline-danger">Logout</a>
              </form>
            </div>
          </div>
        </div>
    </nav>
    
    <!-- tabel - tugas -->
    <div class="container">
    <a href="formtugas.php" class="btn btn-dark mt-3"><i class="bi bi-journal-plus"></i> Tugas</a>
      <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">Title</th>
                <th scope="col">Course</th>
                <th scope="col">Chapter</th>
                <th scope="col">Deadline</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $username = $_SESSION['username'];
                $query = pg_query($db, "SELECT * FROM tugas WHERE akun_username = '$username'");

                while ($tugas = pg_fetch_array($query)) {
            ?>  
                <tr>
                    <td><?php echo $tugas["judul_tugas"]?></td>
                    <td><?php echo $tugas["nama_matkul"]?></td>
                    <td><?php echo $tugas["nama_bab"]?></td>
                    <td><?php echo $tugas["deadline_tugas"]?></td>
                    <td>
                        <a href="formedittugas.php?id=<?php echo $tugas["id"]?>" class="btn btn-success">Open</a>
                        <a href="hapustugas.php?id=<?php echo $tugas["id"]?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>