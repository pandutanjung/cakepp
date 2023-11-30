<?php
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
    <title>Dashboard | Cakepp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">  
    <style>
        body {
            padding-top: 56px; /* Adjusted to avoid overlap with fixed-top navbar */
        }
    </style>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary bg-info-subtle fixed-top">
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
                  <a class="nav-link active" aria-current="page" href="index.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="daftarcatatan.php">Catatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftartugas.php">Tugas</a>
                  </li>
              </ul>
              <form class="d-flex mt-3">
                <a href="keluar.php" class="btn btn-outline-danger">Logout</a>
              </form>
            </div>
          </div>
        </div>
      </nav>

      <!-- Week Card -->
          <?php
            include("config.php");
            $username = $_SESSION['username'];
            $query = pg_query($db, "SELECT * FROM pertemuan WHERE akun_username = '$username'");
            while ($pertemuan = pg_fetch_array($query)) {
          ?>
          <div class="row">
              <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card text-center mb-3 mt-3 d-flex" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Week <?=$pertemuan['pertemuan_ke'];?></h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                  <p class="card-text">List of Catatan and Tugas</p>
                  <a href="lihatweek.php?id=<?php echo $pertemuan["id"]?>" class="btn btn-info text-light"><i class="bi bi-folder2-open"></i> Show</a>
                  <a href="hapusweek.php?id=<?php echo $pertemuan["id"]?>" class="btn btn-danger text-light"><i class="bi bi-folder-x"></i> Delete</a>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>


          <!-- Add Week Card -->
            <div class="card text-center mb-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Add Week</h5>
                  <p class="card-text">View your Catatan and Tugas list by week</p>
                  <a class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-folder-plus"> Add</i></a>
                </div>
            </div>
      

      <!-- Modal Add Week -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Week</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="prosestambahweek.php" method="POST">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Week: </label>
                  <select class="form-select" id="inputGroupSelect02" name="pertemuan_ke">
                      <option selected>Choose...</option>
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
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info" name="tambah">Save</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>