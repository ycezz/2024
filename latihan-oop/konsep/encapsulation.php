<?php 

class RekeningBank {
    private $saldo;

    public function __construct( $saldoAwal = 0 )
    {
        $this->saldo = $saldoAwal;
    }

    public function cekSaldo() {
        $str = "Saldo anda sebesar: Rp " . number_format($this->saldo, 0, ',', ',');
        return $str;
    }

    public function tambahSaldo( $jmlUang )
    {
        if( $jmlUang > 0 ) {
            $this->saldo += $jmlUang;
            return "Berhasil menyetor Rp. " . number_format($jmlUang, 0, ',', ',');
        } else {
            return "Jumlah setoran harus lebih dari 0.";
        }
    }

    public function tarikSaldo( $jmlUang )
    {
        if( $jmlUang > 0 ) {
            if( $this->saldo >= $jmlUang ) {
                $this->saldo -= $jmlUang;
                return "Berhasil menarik Rp. " . number_format($jmlUang, 0, ',', ',');
            } else {
                return "Saldo tidak mencukupi untuk melakukan penarikan.";
            }
        } else {
            return "Jumlah penarikan harus lebih dari 0.";
        }
    }

    public function sisaSaldo() 
    {
        return $this->saldo;
    }
}

$akun = new RekeningBank(1000000);
echo $akun->cekSaldo();
echo "<br>";
echo $akun->tambahSaldo(500000);
echo "<br>";
echo $akun->tarikSaldo(200000);
echo "<br>";
echo "Sisa saldo anda sebesar: Rp " . number_format($akun->sisaSaldo(), 0, ',', ',');