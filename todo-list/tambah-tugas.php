<?php 

// Contoh penambahan tugas, bisa disesuaikan dengan kebutuhan
require_once 'DaftarTugas.php';
require_once 'Tugas.php';

$deskripsi = $_POST['deskripsi'];

$tugas = new Tugas($deskripsi);
$daftarTugas = new DaftarTugas();
$daftarTugas->tambahTugas($tugas);

header("Location: index.php");
exit;