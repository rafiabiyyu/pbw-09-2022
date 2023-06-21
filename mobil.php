<?php

class Mobil {
    private $merk;
    private $tahun;
    private $warna;

    public function __construct($merk, $tahun, $warna) {
        $this->merk = $merk;
        $this->tahun = $tahun;
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getTahun() {
        return $this->tahun;
    }

    public function getWarna() {
        return $this->warna;
    }
    public function getInfo() {
        return "Merk: " . $this->merk . ", Tahun: " . $this->tahun . ", Warna: " . $this->warna;
    }
}

?>