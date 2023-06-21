<?php
include "mobil.php";

// Membuat objek mobil
$mobil1 = new Mobil("Toyota", 2020, "Merah");
$mobil2 = new Mobil("Honda", 2018, "Hitam");

// Mengakses informasi mobil melalui objek
echo $mobil1->getInfo() . "<br>";
echo $mobil2->getInfo() ."<br>";
?>