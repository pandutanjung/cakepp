<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Cakepp</title>
</head>
<body>
    <header>
        <h3>Daftar</h3>
    </header>
    <form action="prosesdaftar.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br>
    <label for="konfirmasi_password">Konfirmasi Password:</label><br>
    <input type="password" id="konfirmasi_password" name="konfirmasi_password"><br><br>
    <input type="submit" value="Daftar" name="daftar">
    <p>Sudah punya akun? <a href="masuk.php">Masuk disini</a></p>
    </form>
</body>
</html>