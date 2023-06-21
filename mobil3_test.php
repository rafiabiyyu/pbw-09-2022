<?php
include "mobil_3.php";
$mobil1 = new Mobil("Toyota", 2020, "Merah");
$mobil2 = new Mobil("Honda", 2018, "Hitam");

$mobil1->tambahKecepatan(50);
echo "Kecepatan mobil 1: " . $mobil1->getCurrentKecepatan() . " km/jam.\n";
$mobil1->kurangiKecepatan(30);
echo "Kecepatan mobil 1: " . $mobil1->getCurrentKecepatan() . " km/jam.\n";
$mobil2->tambahKecepatan(70);
echo "Kecepatan mobil 2: " . $mobil2->getCurrentKecepatan() . " km/jam.\n";
$mobil2 -> kurangiKecepatan(20);
echo "Kecepatan mobil 2: " . $mobil2->getCurrentKecepatan() . " km/jam. \n";
?>