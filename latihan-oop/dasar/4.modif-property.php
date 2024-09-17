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

}


$buku1 = new Buku("Belajar OOP PHP", "John Doe", 2018);
echo "Sebelum perubahan: " . $buku1->tampilkanInfo();
echo "<br>";

// Mengubah tahun terbit menjadi nilai baru
$buku1->ubahTahunTerbit(2022);
echo "Setelah perubahan: " . $buku1->tampilkanInfo();
