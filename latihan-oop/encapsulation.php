<?php 

class AkunBank {
    private $saldo,
            $saldoAwal = 0;

    public function __construct( $saldoAwal = 0 )
    {
        $this->saldo = $saldoAwal;
    }

    public function cekSaldo() 
    {
        $str = "Saldo anda sebesar: Rp " . number_format($this->saldo, 2, ',', '.' );
        return $str;
    }

    public function setorUang($jmlUang)
    {
        if($jmlUang > 0 ) {
            $this->saldo += $jmlUang;
            return "Berhasil menyetor Rp " . number_format($jmlUang, 2, ',', '.' ) . "." .$this->cekSaldo();
        } else {
            return "Jumlah setoran harus lebih dari 0.";
        }
    }

    public function tarikUang($jmlUang) 
    {
        if($jmlUang > 0) {
            if($this->saldo >= $jmlUang) {
                $this->saldo -= $jmlUang;
                return "Berhasil menarik Rp " . number_format($jmlUang, 2, ',', '.' ) . "." .$this->cekSaldo();
            } else {
                return "Saldo tidak mencukupi untuk melakukan penarikan";
            }
        } else {
            return "Jumlah penarikan harus lebih dari 0";
        }
    }
}

$akun = new AkunBank(1000000);

echo $akun->cekSaldo();
echo "<br>";
echo $akun->setorUang(500000) ;
echo "<br>";
echo $akun->tarikUang(200000);


