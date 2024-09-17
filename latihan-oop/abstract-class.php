<?php 
// dasar abstract class
Abstract class Kendaraan {
    private $nama,
            $kecepatan;
    
    public function __construct( $nama = "nama", $kecepatan = "kecepatan" )
    {
        $this->nama = $nama;
        $this->kecepatan = $kecepatan;
    }

    public function setNama($nama) 
    {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setKecepatan($kecepatan)
    {
        $this->kecepatan = $kecepatan;
    }

    public function getKecepatan()
    {
        return $this->kecepatan;
    }

    abstract public function jalankan();

    public function getInfo() 
    {
        // Mobil honda 50km/jam dengan tipe jazz 
        $str = "{$this->nama}, kecepatan: {$this->kecepatan} km/jam";

        return $str;
    }

}

class Mobil extends Kendaraan {
    public $tipeMobil;

    public function __construct( $nama = "nama", $kecepatan = "kecepatan", $tipeMobil = "tipeMobil" )
    {
        parent::__construct( $nama, $kecepatan );
        $this->tipeMobil = $tipeMobil;
    }
    
    public function jalankan()
    {
        $str = "Mobil " . $this->getInfo() . " dengan tipe mobil {$this->tipeMobil}.";
        return $str;
    }
}

class SepedaMotor extends Kendaraan {
    public $tipeMotor;

    public function __construct( $nama = "nama", $kecepatan = "kecepatan", $tipeMotor = "tipeMotor" )
    {
        parent::__construct( $nama, $kecepatan );
        $this->tipeMotor = $tipeMotor;
    }

    public function jalankan()
    {
        $str = "Motor " . $this->getInfo() . " dengan tipe motor {$this->tipeMotor}.";
        return $str;
    }
}

$mobil = new Mobil("Honda Jazz", 120, "Hatchback");
$motor = new SepedaMotor("Yamaha NMAX", 80, "Skuter");

echo $mobil->jalankan();
echo "<br>";
echo $motor->jalankan();







