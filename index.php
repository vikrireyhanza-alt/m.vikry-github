<?php
require_once 'Mahasiswa.php';
require_once 'Dosen.php';

$mhs = new Mahasiswa("Budi");
$dsn = new Dosen("Pak Joko");

$mhs->login("budi123", "1234");    // Login berhasil
$dsn->login("joko_dsn", "1111");   // Login gagal
?>