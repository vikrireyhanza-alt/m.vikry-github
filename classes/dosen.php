<?php
require_once 'User.php';
require_once 'Login.php';

class Dosen extends User implements Login {
    private $nidn;

    public function __construct($nama, $email, $nidn) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
    }

    public function tampilkanInfoUser() {
        echo "Dosen: {$this->nama}, NIDN: {$this->nidn}, Email: {$this->email}<br>";
    }

    public function login($username, $password) {
        echo "Dosen {$this->nama} login dengan username: $username dan password: $password<br>";
    }
}