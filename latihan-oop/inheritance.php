<?php 

class Kendaraan {
    public $jenis,
            $bahan_bakar;

    public function __construct($jenis, $bahan_bakar)
    {
        $this->jenis = $jenis;
        $this->bahan_bakar = $bahan_bakar;
    }

    public function getLabel() {
        // return "$this->jenis, $this->bahan_bakar"; 
        return "$this->jenis dengan bahan bakar $this->bahan_bakar";
    }

    public function getInfoKendaraan() 
    {
        $str = "Kendaraan: {$this->getLabel()}";
        return $str;
    }
}

class Motor extends Kendaraan {
    public $kecepatan_max;

    public function __construct($jenis, $bahan_bakar, $kecepatan_max)
    {
        parent::__construct($jenis, $bahan_bakar);
        $this->kecepatan_max = $kecepatan_max;
    }

    public function getinfoKendaraan()
    {
        $str = "Kendaraan Motor : " . parent::getLabel() . " dengan kecepatan maksimal {$this->kecepatan_max} km/jam.";
        return $str;
    }
}

class Truk extends Kendaraan {
    public $kapasitas_muatan;

    public function __construct($jenis, $bahan_bakar, $kapasitas_muatan)
    {
        parent::__construct($jenis, $bahan_bakar);
        $this->kapasitas_muatan = $kapasitas_muatan;
    }

    public function getinfoKendaraan()
    {
        $str = "KendaraanTruk : " . parent::getLabel() . " dengan kapasitas muatan {$this->kapasitas_muatan} ton.";
        return $str;
    }
}

// Instansiasi Objek
$motor = new Motor("Motor Sport", "Bensin", "200");
$truk = new Truk("Truk Kontainer", "Solar", 20);

// Output
echo $motor->getInfoKendaraan();
echo "<br>";
echo $truk->getInfoKendaraan();




