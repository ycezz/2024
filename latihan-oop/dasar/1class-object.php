<?php 

class Buku {
    public $judul,
           $pengarang,
           $tahunTerbit = 0;

    public function getLabel() {
        return "$this->judul, $this->pengarang";
    }

}

$buku1 = new Buku();
$buku1->judul = "Belajar OOP PHP";
$buku1->pengarang = "John Doe";
$buku1->tahunTerbit = 2018;

echo "Buku: " . $buku1->judul . " | " . $buku1->tahunTerbit;
