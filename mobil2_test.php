<?php
    include "mobil_2.php";
    $mobil1 = new Mobil("Toyota", 2020, "Merah");
    $mobil2 = new Mobil("Honda", 2018, "Hitam");
    
    $mobil1->hidupkanMesin();
    $mobil1->matikanMesin();
    $mobil2->hidupkanMesin();
    $mobil2->matikanMesin();
    
    // Mengakses informasi mobil melalui objek
    echo $mobil1->getInfo() . "<br>";
    echo $mobil2->getInfo() ."<br>";
?>