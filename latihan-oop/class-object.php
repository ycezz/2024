<?php 

class Mobil {
    // Properties
    public $merk;
    public $warna;
    public $kecepatan;

    // Methods
    function set_name($merk) {
        $this->merk = $merk;
    }
    function get_name() {
        return $this->merk;
    }

    function set_color($warna) {
        $this->warna = $warna;
    }
    function get_color() {
        return $this->warna;
    }

    function set_speed($kecepatan) {
        $this->kecepatan = $kecepatan;
    }
    function get_speed() {
        return $this->kecepatan;
    }
}

// Object
$honda = new Mobil();
$honda->set_name('Honda Jazz Rs');
$honda->set_color('Putih');
$honda->set_speed('Lumayan cepat');

echo "Merk: " .$honda->get_name();
echo "<br>";
echo "Warna: " .$honda->get_color();
echo "<br>";
echo "Kecepatan: " .$honda->get_speed();