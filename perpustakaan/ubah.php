<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di url
$id_buku = $_GET["id_buku"];
// query buku berdasarkan id
$buku = query("SELECT * FROM buku WHERE id_buku = $id_buku")[0];

// cek tombol submit
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil dapat diubah atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data buku berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data buku gagal diubah!');
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
    <title>Ubah Data Buku</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/d014f0b29d.js" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">

        <div class="header">
            <a href="index.php" class="logo"><img src="./img/logo.png" alt="Logo Perpustakaan"></a>
    
            <h1>Ubah Data Buku</h1>

            <a href="logout.php">Logout</a>
        </div>

        <form action="" method="post">
            <input type="hidden" name="id_buku" value="<?= $buku["id_buku"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $buku["gambar"]; ?>">
            <ul>
                <li>
                    <label for="nrb">NRB : </label>
                    <input type="text" name="nrb" id="nrb" required class="input-tambah" value="<?= $buku["nrb"]; ?>">
                </li>
                <li>
                    <label for="judul">Judul : </label>
                    <input type="text" name="judul" id="judul" required class="input-tambah" value="<?= $buku["judul"]; ?>">
                </li>
                <li>
                    <label for="penulis">Penulis : </label>
                    <input type="text" name="penulis" id="penulis" required class="input-tambah" value="<?= $buku["penulis"]; ?>">
                </li>
                <li>
                    <label for="penerbit">Penerbit : </label>
                    <input type="text" name="penerbit" id="penerbit" required class="input-tambah" value="<?= $buku["penerbit"]; ?>">
                </li>
                <li>
                    <label for="tahun_terbit">Tahun Terbit : </label>
                    <input type="number" name="tahun_terbit" id="tahun_terbit" min="1900" max="2099" required class="input-tambah" value="<?= $buku["tahun_terbit"]; ?>">
                </li>
                <li>
                    <label for="gambar">Gambar : </label>
                    <img src="./img/<?= $buku["gambar"]; ?>" width="40">
                    <input type="file" name="gambar" id="gambar" required class="input-tambah" value="<?= $buku["gambar"]; ?>">
                </li>
                <li>
                    <label for="stok">Stok : </label>
                    <input type="number" name="stok" id="stok" required class="input-tambah" value="<?= $buku["stok"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit" class="btn-tambah">Ubah Data</button>
                </li>
            </ul>
        </form>

    </div>

</body>
</html>