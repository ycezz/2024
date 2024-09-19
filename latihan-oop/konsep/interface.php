<?php 

interface Mesin {
    public function matikan();
    public function nyalakan();
}

class Mobil implements Mesin {
    
    public function matikan()
    {
        return "Mesin mobil dimatikan";
    }

    public function nyalakan()
    {
        return "Mesin mobil dinyalakan. bruumm...brummmm";
    }
}

class Motor implements Mesin {

    public function matikan()
    {
        return "Mesin motor dimatikan";
    }

    public function nyalakan()
    {
        return "Mesin motor dinyalakan. treenggg trennggg teeeng";
    }
} 

$mobil = new Mobil();
echo $mobil->nyalakan();
echo "<br>";
echo $mobil->matikan();
echo "<br>";
echo "<hr>";
$motor = new Motor();
echo $motor->nyalakan();
echo "<br>";
echo $motor->matikan();