<?php 

class DaftarTugas {
    private $tugasList = [];

    public function tambahTugas( Tugas $tugas )
    {
        $this->tugasList[] = $tugas;
    }

    public function hapusTugas($index) 
    {
        if( isset($this->tugasList[$index])) {
            unset($this->tugasList[$index]);
            $this->tugasList = array_values($this->tugasList);
        }
    }

    public function tampilkanSemuaTugas() 
    {
        foreach ( $this->tugasList as $tugas ) {
            echo "Deskripsi: " . $tugas->getDeskripsi() . "<br>";
            echo "Status: " . $tugas->getStatus() . "<br><br>";
        }
    }
    
}

// $tugas1 = new Tugas("Belajar PHP OOP");
// $tugas2 = new Tugas("Membaca buku");

// $daftarTugas = new DaftarTugas();
// $daftarTugas->tambahTugas($tugas1);
// $daftarTugas->tambahTugas($tugas2);

// echo "Daftar Tugas:<br>";
// $daftarTugas->tampilkanSemuaTugas();
