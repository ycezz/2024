<?php 
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // cek username dan password
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek apakah username ada
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;
            
            header("Location: index.php");
            exit;
            }
        }
        // jika password salah
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/d014f0b29d.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">

        <div class="header">
    
            <a href="index.php" class="logo"><img src="./img/logo.png" alt="Logo Perpustakaan"></a>
    
            <h1>Halaman Login</h1>

            <a href="registrasi.php" class="logout">Registrasi ➡ </a>                           

        </div>

        <div class="form-admin">
   
                <form action="" method="post">
                    <ul>
                        <li>
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" class="input-register" required>
                        </li>
                        <li>
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" class="input-register" required>
                        </li>
                        <li>
                            <?php if( isset($error) ) : ?>
                                <p class="pesan-error">Username atau password salah</p>
                            <?php endif; ?>                                         
                        </li>
                        <li>
                            <button type="submit" name="login" class="btn-register">Login</button>
                        </li>
                    </ul>
                </form>

        </div>

    </div>

</body>
</html>