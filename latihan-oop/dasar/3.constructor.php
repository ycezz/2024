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
        return "$this->judul, $this->pengarang";
    }

}


$buku1 = new Buku("Belajar OOP PHP", "John Doe", 2018);

echo "Buku: " . $buku1->tampilkanInfo();
var_dump($buku1);