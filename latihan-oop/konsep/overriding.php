<?php 

class Komputer {
    public $merk;

    public function __construct( $merk = "merk" ) 
    {
        $this->merk = $merk;
    }

    public function spesifikasi() {
        $str = "{$this->merk}";
        return $str;
    }
}

class Laptop extends Komputer {
    public $berat;

    public function __construct( $merk = "merk", $berat = 0)
    {
        parent::__construct($merk);
        $this->berat = $berat;
    }
    public function spesifikasi()
    {
        return parent::spesifikasi() . "mempunyai berat: {$this->berat} kg";
    }
}

class Desktop extends Komputer {
    public $dayaListrik;

    public function __construct( $merk = "merk", $dayaListrik = 0)
    {
        parent::__construct($merk);
        $this->dayaListrik = $dayaListrik;
    }
    public function spesifikasi()
    {
        return parent::spesifikasi() . "mempunyai daya listrik: {$this->dayaListrik} watt";
    }
}

$laptop = new Laptop("Macbook ", 0.7);
$desktop = new Desktop("Lenovo PC ", 200);
echo $laptop->spesifikasi();
echo "<br>";
echo $desktop->spesifikasi();
