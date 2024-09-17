<?php 

class Buku {
    public $judul,
           $pengarang,
           $tahunTerbit = 0;

    public function __construct( $judul = "judul", $pengarang = "pengarang", $tahunTerbit = 0 )
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function tampilkanInfo() {
        return "$this->judul, $this->pengarang, Tahun terbit: $this->tahunTerbit";
    }

    public function ubahTahunTerbit($tahunBaru)
    {
        // Mengubah nilai tahunTerbit dengan nilai baru
        $this->tahunTerbit = $tahunBaru;
    }

    public function hitungUsia() 
    {
        $tahunSekarang = date('Y'); // Mendapatkan tahun saat ini
        return $tahunSekarang - $this->tahunTerbit;
    }

}


$buku1 = new Buku("Belajar OOP PHP", "John Doe", 2018);
$buku2 = new Buku("Naruto", "Masashi Kishimoto", 2002);
$buku3 = new Buku("Kisah cinta", "Putri", 2018);

echo $buku1->tampilkanInfo();
echo "<br>";
echo "Usia Buku: " . $buku1->hitungUsia() . " tahun";
echo "<hr>";
echo $buku2->tampilkanInfo();
echo "<br>";
echo "Usia Buku: " . $buku2->hitungUsia() . " tahun";
echo "<hr>";
echo $buku3->tampilkanInfo();
echo "<br>";
echo "Usia Buku: " . $buku3->hitungUsia() . " tahun";
echo "<hr>";