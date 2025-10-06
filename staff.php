<?php
require_once 'User.php';
require_once 'Login.php';

class Staff extends User implements Login {
    private $bagian;

    public function __construct($nama, $email, $bagian) {
        parent::__construct($nama, $email);
        $this->bagian = $bagian;
    }

    public function tampilkanInfoUser() {
        echo "Staff: {$this->nama}, Bagian: {$this->bagian}, Email: {$this->email}<br>";
    }

    public function login($username, $password) {
        echo "Staff {$this->nama} login dengan username: $username dan password: $password<br>";
    }
}