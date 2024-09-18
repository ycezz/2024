<?php 

class Mahasiswa {
    public $nama,
           $nim,
           $jurusan;

    public function getInfo() {
        return "$this->nama, $this->nim, $this->jurusan";
    }
}

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Putri Mila";
$mahasiswa1->nim = 20565765;
$mahasiswa1->jurusan = "Sistem Informasi";

echo "Mahasiswa: " . $mahasiswa1->getInfo();




