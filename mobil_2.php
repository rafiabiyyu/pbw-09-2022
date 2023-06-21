<?php
    class Mobil{
        private $mesinHidup;

        public function getmesinHidup(){
            $this->mesinHidup = false;
        }

        public function hidupkanMesin() {
            if (!$this->mesinHidup) {
                $this->mesinHidup = true;
                echo "Mesin mobil dihidupkan.\n";
            } else {
                echo "Mesin mobil sudah menyala.\n";
            }
        }
        
        public function matikanMesin() {
            if ($this->mesinHidup) {
                $this->mesinHidup = false;
                echo "Mesin mobil dimatikan.\n";
            } else {
                echo "Mesin mobil sudah mati.\n";
            }
        }
        
        public function periksaMesin() {
            if ($this->mesinHidup) {
                echo "Mesin mobil menyala.\n";
            } else {
                echo "Mesin mobil mati.\n";
            }
        }
    
    }
?>