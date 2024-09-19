<?php 

abstract class Hewan {
    abstract public function berSuara();
}

class Kucing extends Hewan {
    public function berSuara()
    {
        echo "Kucing: Meow <br>";
    }
}

class Anjing extends Hewan {
    public function berSuara()
    {
        echo "Anjing: Woof <br>";
    }
}

class Burung extends Hewan {
    public function berSuara()
    {
        echo "Burung: Peep";
    }
}

function suaraHewan(Hewan $hewan) {
    $hewan->berSuara();
}

$kucing = new Kucing();
$anjing = new Anjing();
$burung = new Burung();

suaraHewan($kucing);
suaraHewan($anjing);
suaraHewan($burung);

