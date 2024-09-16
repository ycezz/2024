<?php 

abstract class Hewan {
    // abstract class memastikan bahwa setiap class yg meng-extend class tersebut harus mendefinisikan method dengan caranya sendiri
    abstract public function suara();
}

class Kucing extends Hewan {
    public function suara()
    {
        return "kucing: Meeeoooow";
    }
}

class Anjing extends Hewan {
    public function suara()
    {
        return "anjing: Wuuuuuufff";
    }
}

function suaraHewan(Hewan $hewan) {
    echo "Bunyi hewan " . $hewan->suara() . "<br>";
}

$kucing = new Kucing();
$anjing = new Anjing();

suaraHewan($kucing);
suaraHewan($anjing);