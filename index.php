<?php
require_once "Staff.php";

$staff1 = new Staff("Andi", "IT");
echo "Nama: " . $staff1->getNama() . "<br>";
echo "Departemen: " . $staff1->getDepartemen() . "<br>";
echo "Role: " . $staff1->getRole();
?>