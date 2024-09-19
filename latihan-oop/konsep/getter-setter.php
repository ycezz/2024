<?php 

class Buku {
    private $judul,
            $penulis,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $harga = "harga" )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function infoBuku() {
        $str = "{$this->judul} | {$this->penulis} | {$this->harga}";
        return $str;
    }
}

$buku1 = new Buku("Naruto", "Masashi Kishimoto", 20000);
echo $buku1->infoBuku();