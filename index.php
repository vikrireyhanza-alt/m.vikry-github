<?php
require_once 'Mahasiswa.php';
require_once 'Dosen.php';

$mhs = new Mahasiswa("vikry");
$dsn = new Dosen("Pak Ajib");

$mhs->login("vikryi123", "1234");    // Login berhasil
$dsn->login("ajib_dsn", "1111");   // Login gagal
?>
