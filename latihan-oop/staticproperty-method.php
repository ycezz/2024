<?php 

class Matematika {
    // Static property
    private static $angka = 0,
                  $pi = 3.14;
    
    public function __construct()
    {
        // Meningkatkan jumlah setiap kali objek baru dibuat
        self::$angka++;
    }

    public static function kali()
    {
        return self::$angka * self::$pi;
    }

    public static function tambah()
    {
        return self::$angka + self::$pi;
    }

}

$m1 = new Matematika();

echo "Kali: " . $m1->kali(5);
echo "<br>";
echo "Tambah: " . $m1->tambah(3);
