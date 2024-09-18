<?php 

class Kendaraan {
    public $merk,
           $model;

    public function __construct( $merk = "merk", $model = "model")
    {
        $this->merk = $merk;
        $this->model = $model;
    }

    public function infoKendaraan()
    {
        $str = "{$this->merk} | {$this->model}";
        return $str;
    }
}

class Mobil extends Kendaraan {
    public function infoKendaraan()
    {
        $str = "{$this->merk} | {$this->model}";
        return $str;
    }
}

class Motor extends Kendaraan {
    public function infoKendaraan()
    {
        $str = "{$this->merk} | {$this->model}";
        return $str;
    }
}

$mobil = new Mobil("Honda", "Hatchback");
$motor = new Motor("PCX", "Skuter");

echo $mobil->infoKendaraan();
echo "<br>";
echo $motor->infoKendaraan();
