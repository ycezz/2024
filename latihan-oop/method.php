<?php 

class Mobil {
    public $merk;
    public $warna;
    public $kecepatan;
    private $mesin_hidup = false;

    public function __construct( $merk = "merk", $warna = "warna", $kecepatan = "kecepatan")
    {
        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    public function jalankan()
    {
        if( !$this->mesin_hidup) {
            $this->mesin_hidup = true;
            return "Mobil {$this->merk} dinyalakan dan siap jalan.";
        } else {
            return "Mobil {$this->merk} sudah menyala.";
        }
    }

    public function berhenti()
    {
        if( $this->mesin_hidup ) {
            $this->mesin_hidup = false;
            return "Mobil {$this->merk} berhenti dan dimatikan.";
        } else {
            return "Mobil {$this->merk} sudah berhenti.";
        }
    }
}

class CetakInfoMobil {
    public function cetak( Mobil $mobil ) {
        $str = "{$mobil->merk} | {$mobil->warna} | {$mobil->kecepatan}";
        return $str;
    }
}

$mobil1 = new Mobil("Honda Jazz Rs", "Merah", "Lumayan cepat.");
$mobil2 = new Mobil("Daihatsu Ayla", "Putih", "Lambat.");


$infoMobil1 = new CetakInfoMobil();
echo $infoMobil1->cetak($mobil1);

$infoMobil2 = new CetakInfoMobil();
echo "<br>";
echo $infoMobil2->cetak($mobil2);

// method baru
echo "<hr>";
echo $mobil1->jalankan();
echo "<br>";
echo $mobil2->berhenti();