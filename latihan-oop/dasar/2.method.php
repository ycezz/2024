<?php 

class Buku {
    public $judul,
           $pengarang,
           $tahunTerbit = 0;

    public function tampilkanInfo() {
        return "$this->judul, $this->pengarang, $this->tahunTerbit";
    }

}


$buku1 = new Buku;
$buku1->judul = "Belajar OOP PHP";
$buku1->pengarang = "John Doe";
$buku1->tahunTerbit = 2018;

echo "Buku: " . $buku1->tampilkanInfo();


var_dump($buku1);