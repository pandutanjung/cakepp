<?php
    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: index.php");
        exit;
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk | Cakepp</title>
</head>
<body>
    <header>
        <h3>Masuk</h3>
    </header>
    <form action="prosesmasuk.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password">
    <input type="submit" value="Masuk" name="masuk">
    <p>Belum punya akun? <a href="daftar.php">Daftar disini</a></p>
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <title>Cakepp</title>
    <link rel="stylesheet" href="login.css">
</head> 

<body>
    
    <header>
        <h2 class="logo"><img src="assets/Logo.png" alt=""><!--  kasih nama atau gambar logo nanti di sini --></h2>
        <nav class="navigation">
            <button class="button-login">Login</button>
        </nav>
    </header>

    <!-- home section -->
    <section id="home">
        <div class="content">
            <img src="assets/notesHome.jpeg" alt="">
            <h3>Welcome to Our Website</h3>
        </div>
    </section>

    <!-- about section -->
    <section id="about">
        <div class="content">
            <img src="assets/Logo.png" alt="">
            <!-- <div class="content-text">
                <h2>About Us</h2>
                <p>Cakepp, short for Catatan Kelas App, is your digital companion in navigating your academic. With Cakepp, you can create notes and even gain insights about your work.</p>
            </div> -->
        </div>
    </section>

    <!-- contact section -->
    <section id="about">
        <div class="content-text">
            <h2>About Us</h2>
            <p>Cakepp, short for Catatan Kelas App, is your digital companion in navigating your academic. With Cakepp, you can create notes and even gain insights about your work.</p>
        </div>
    </section>

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="login_process.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                    <input type="text" id="username" name="username">
                    <label for="username">Username:</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" id="password" name="password">
                    <label for="password">Password:</label>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="registration_process.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </span>
                    <input type="text" id="username" name="username">
                    <label for="username">Username:</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" id="password" name="password">
                    <label for="password">Password:</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                    <label for="password_confirmation">Password Confirmation:</label>
                </div>
                <button type="submit" class="btn" name="regist">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="login.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>