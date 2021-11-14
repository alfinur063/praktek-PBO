<?php 
  class katak {
      public $umur,
             $nama;

            public function __construct ($umur, $nama) {
                $this->umur= $umur;
                $this->nama= $nama;
            }

            public function getnumurkatak() {
                return "{$this->umur}" ;
            }

            public function getnamakatak() {
                return "{$this->nama}" ;
            }
            public function getcarabergerak() {
                return 'melompat' ;
            }
        }

    class kecebong extends katak {
        public $panjangekor;

            public function __construct($umur, $nama, $panjangekor,) {
                parent::__construct ($umur, $nama);
                $this->panjangekor= $panjangekor;
            }

            public function getpanjangekor() {
                return $this->panjangekor ;
            }
            public function getcarabergerak() {
                return 'berenang' ;
            }
    }

            $binatang1 = new katak ("5", "Froggy");
            $binatang2 = new kecebong ("2", "Junior Frog","10");

        ?>
