<?php 

class Produk {
    public $nama,
           $harga,
           $stok;

    public function __construct( $nama = "nama", $harga = "harga", $stok = "stok" )
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
    
}

class infoProduk {
    public function info( Produk $produk ) {
        $str = "Produk: {$produk->nama} | Harga: {$produk->harga} | Stok: {$produk->stok}";
        return $str;
    }
}

$produk1 = new Produk("Susu", 80000, 20);

$infoProduk1 = new infoProduk();
echo $infoProduk1->info($produk1);

