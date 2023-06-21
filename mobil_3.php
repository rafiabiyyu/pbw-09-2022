<?php
 class Mobil {
    private $kecepatan;

    public function getCurrentKecepatan() {
        return $this->kecepatan;
    }

    public function tambahKecepatan($nilai) {
        if ($this->kecepatan + $nilai > 0) {
            $this->kecepatan += $nilai;
            echo "Kecepatan mobil bertambah menjadi " . $this->kecepatan . " km/jam.\n";
        } else {
            echo "Nyalakan mesin terlebih dahulu.\n";
        }
    }

    public function kurangiKecepatan($nilai) {
        if ($this->kecepatan - $nilai >= 0) {
            $this->kecepatan -= $nilai;
            echo "Kecepatan mobil berkurang menjadi " . $this->kecepatan . " km/jam.\n";
        } else {
            echo "Kecepatan mobil sudah mencapai 0 km/jam.\n";
        }
    }
 }

?>