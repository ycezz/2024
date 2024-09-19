<?php 

class Database {
    public function koneksi() {
        return "Koneksi ke database berhasil <br>";
    }
}

class UserService {
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getUser() {
        return $this->database->koneksi() . "Mengambil data user.";
    }
}

$database = new Database();

$service = new UserService($database);
echo $service->getUser();