<?php 
require 'functions.php';

    if( isset($_POST["register"]) ) {
        // cek apakah data user berhasil ditambahkan atau belum
        if( registrasi($_POST) > 0 ) {
            echo "
              <script>
                alert('User baru berhasil ditambahkan!');
              </script>  
            ";
        } else {
            echo mysqli_error($conn);
        }
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi User</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/d014f0b29d.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">

        <div class="header">
            <a href="index.php" class="logo"><img src="./img/logo.png" alt="Logo Perpustakaan"></a>
    
            <h1>Registrasi Admin</h1>

            <a href="index.php" class="home">Home <i class="fa-solid fa-house"></i></a>
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
                            <label for="password2">Konfirmasi password :</label>
                            <input type="password" name="password2" id="password2" class="input-register" required>
                        </li>
                        <li>
                            <button type="submit" name="register" class="btn-register">Register</button>
                        </li>
                    </ul>
                </form>
                     
            </div>

    </div>
    
</body>
</html>