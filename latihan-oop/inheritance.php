<?php 

class Kendaraan {
    public $jenis,
           $bahan_bakar;
    
    public function __construct( $jenis = "jenis", $bahan_bakar = "bahan_bakar")
    {
        $this->jenis = $jenis;
        $this->bahan_bakar = $bahan_bakar;
    }

    public function getInfoKendaraan() 
    {
        echo "";
    }
    
}

class Motor extends Kendaraan {
    public function getInfoKendaraan()
    {
        $str = "Motor roda dua : {$this->getInfoKendaraan()} .";
        return $str;
    }
}

class Truk extends Kendaraan {
    public function getInfoKendaraan()
    {
        $str = "Truk : {$this->getInfoKendaraan()} .";
        return $str;
    }
}

$kendaraan1 = new Motor("Honda PCX", "Merah");
$kendaraan2 = new Truk("Truk Fuso", "Hijau");