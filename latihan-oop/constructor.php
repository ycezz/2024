<?php 

class Mobil {
    public $merk;
    public $warna;
    public $kecepatan;

    public function __construct( $merk = "merk", $warna = "warna", $kecepatan = "kecepatan")
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }
}

class CetakInfoMobil {
    public function cetak( Mobil $mobil ) {
        $str = "{$mobil->merk} | {$mobil->warna} | {$mobil->kecepatan}";
        return $str;
    }
}

$mobil1 = new Mobil("Honda Jazz Rs", "Merah", "Lumayan cepat.");
$mobil2 = new Mobil("Ayla", "Putih", "Lambat.");


$infoMobil1 = new CetakInfoMobil();
echo $infoMobil1->cetak($mobil1);

$infoMobil2 = new CetakInfoMobil();
echo "<br>";
echo $infoMobil2->cetak($mobil2);