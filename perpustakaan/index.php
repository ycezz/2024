<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
$buku = query("SELECT * FROM buku");

// tombol cari
if( isset($_POST["cari"])) {
    // ambill keywird yg diinput user
    $buku = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Perpustakaan</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/d014f0b29d.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">

        <div class="header">
            <a href="index.php" class="logo"><img src="./img/logo.png" alt="Logo Perpustakaan"></a>
    
            <h1>Daftar Buku Perpustakaan</h1>

            <a href="logout.php" class="logout">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
        </div>

        <hr class="garis">
        
        <a href="tambah.php" class="btn-tambah">Tambah data buku</a>

        <form action="" method="post">
            <input type="text" name="keyword" class="input-cari" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
            <button type="submit" name="cari" class="btn-cari">Cari</button>
        </form>


        <table class="table-buku">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>NRB</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun terbit</th>
                    <th>Stok</th>
                </tr>
            </thead>

            <?php $i = 1; ?>
            <?php foreach( $buku as $row ) : ?>

            <tbody>
                <tr>
                    <td data-label="No"><?= $i; ?></td>
                    <td data-label="Aksi">
                        <a href="ubah.php?id_buku=<?= $row["id_buku"]; ?>" class="link-aksi"><i class="fa-solid fa-pen-to-square"></i> Ubah</a> |
                        <a href="hapus.php?id_buku=<?= $row["id_buku"]; ?>" onclick="return confirm('Anda yakin menghapus data?');" class="link-aksi"><i class="fa-solid fa-trash"></i> Hapus</a>
                    </td>
                    <td data-label="Gambar"><img src="./img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td data-label="NRB"><?= $row["nrb"]; ?></td>
                    <td data-label="Judul"><?= $row["judul"]; ?></td>
                    <td data-label="Penulis"><?= $row["penulis"]; ?></td>
                    <td data-label="Penerbit"><?= $row["penerbit"]; ?></td>
                    <td data-label="Tahun Terbit"><?= $row["tahun_terbit"]; ?></td>
                    <td data-label="Stok"><?= $row["stok"]; ?></td>
                </tr>

                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
            
        </table>

    </div>

</body>
</html>