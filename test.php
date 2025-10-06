<?php
require_once 'Staff.php';

$staff1 = new Staff("Andi", "Keuangan");

echo "Nama: " . $staff1->getNama() . "\n";
echo "Role: " . $staff1->getRole() . "\n";
echo "Departemen: " . $staff1->getDepartemen() . "\n";
?>