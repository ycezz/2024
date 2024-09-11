<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau belum
    if( tambah($_POST) > 0 ) {
        echo " 
            <script>
                alert('Data buku berhasil ditambahkan!');
                document.location.href = 'index.php'; 
            </script>
        ";
    } else {
        echo " 
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php'; 
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data buku</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/d014f0b29d.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">

        <div class="header">
            <a href="index.php" class="logo"><img src="./img/logo.png" alt="Logo Perpustakaan"></a>
    
            <h1>Tambah Buku Perpustakaan</h1>

            <a href="#" class="logout">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="nrb">NRB : </label>
                    <input type="text" name="nrb" id="nrb" class="input-tambah" required>
                </li>
                <li>
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" class="input-tambah" required>
                </li>
                <li>
                    <label for="penulis">Penulis : </label>
                    <input type="text" name="penulis" id="penulis" class="input-tambah" required>
                </li>
                <li>
                    <label for="penerbit">Penerbit : </label>
                    <input type="text" name="penerbit" id="penerbit" class="input-tambah" required>
                </li>
                <li>
                    <label for="tahun_terbit">Tahun Terbit : </label>
                    <input type="number" name="tahun_terbit" id="tahun_terbit" min="1900" max="2099" class="input-tambah" required>
                </li>
                <li>
                    <label for="gambar">Gambar : </label>
                    <label for="gambar" class="custom-file-upload">Upload file</label>
                    <input type="file" name="gambar" id="gambar" class="input-tambah" required>
                </li>
                <li>
                    <label for="stok">Stok : </label>
                    <input type="number" name="stok" id="stok" class="input-tambah" required>
                </li>
                <li>
                    <button type="submit" name="submit" class="btn-tambah">Tambah Data</button>
                </li>
            </ul>
        </form>

    </div>


</body>
</html>