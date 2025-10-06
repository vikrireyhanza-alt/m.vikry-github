<?php
require_once 'classes/Mahasiswa.php';
require_once 'classes/Dosen.php';
require_once 'classes/Staff.php';

$users = [
    new Mahasiswa("Vikry", "Vikry@email.com", "M001"),
    new Dosen("Ibu Sri", "Sri@univ.ac.id", "D123"),
    new Staff("Pak Ajib", "Ajib@univ.ac.id", "Administrasi")
];

foreach ($users as $user) {
    $user->tampilkanInfoUser();

    if ($user instanceof Login) {
        $user->login("username", "1234");
    }

    echo "<hr>";
}