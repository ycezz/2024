<?php 

class Kalkulator {
    public static function tambah(float $a, float $b): float {
        return $a + $b;
    }
    
    public static function kurang(float $a, float $b): float {
        return $a - $b;
    }
    
    public static function kali(float $a, float $b): float {
        return $a * $b;
    }

    public static function bagi(float $a, float $b): float {
        if($b != 0) {
            return $a / $b;
        } else {
            throw new InvalidArgumentException("Pembagian dengan 0 tidak diperbolehkan.");
        }
    }
}

echo Kalkulator::tambah(6, 8);
echo "<br>";
echo Kalkulator::kurang(10, 4);
echo " <br>";
echo Kalkulator::kali(30, 29);
echo " <br>";
echo Kalkulator::bagi(6, 3);