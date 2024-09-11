<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id_buku = $_GET["id_buku"];

// Menghapus data buku
if( hapus($id_buku) > 0  ) {
    echo "
        <script>
            alert('Data buku berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data buku gagal dihapus!');
            document.location.href = 'index.php';
        </script>
        ";
    }

?>