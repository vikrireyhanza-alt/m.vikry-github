<?php
require_once 'Login.php';

class Mahasiswa implements Login {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function login($username, $password) {
        if ($password === "1234") {
            echo "Login berhasil untuk Mahasiswa: {$this->nama}\n";
        } else {
            echo "Login gagal untuk Mahasiswa: {$this->nama}\n";
        }
    }
}
?>