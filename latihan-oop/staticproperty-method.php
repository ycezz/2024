<?php 

class Matematika {
    // Static property
    private static $angka = 0,
                  $pi = 3.14;
    
    public function __construct()
    {
        // digunakan untuk menghitung berapa kali class diinstansiasi.
        self::$angka++;
    }

    public static function kali($nilai) //=> method static diakses langsung melalui class tanpa memerlukan objek
    {
        return $nilai * self::$pi;
        // self::$pi yang bersifat static. Properti ini bisa diakses langsung melalui class, tanpa harus membuat objek terlebih dahulu.
    }

    public static function tambah($nilai)
    {
        return $nilai + self::$pi;
    }

}


echo "Hasil kali: " . Matematika::kali(5);
echo "<br>";
echo "Hasil tambah: " . Matematika::tambah(7);
