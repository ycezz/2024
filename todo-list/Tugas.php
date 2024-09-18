<?php 

class Tugas {
    private $deskripsi;
    private $status; // selesai atau belum selesai

    public function __construct($deskripsi, $status = "belum selesai")
    {
        $this->deskripsi = $deskripsi;
        $this->status = $status;
    }

    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function selesai()
    {
        $this->status = "selesai";
    }
}