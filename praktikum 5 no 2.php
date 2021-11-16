<?php 

class pegawai {
    public $nama,
           $gaji;

    public function __construct( $nama, $gaji) {
        $this->nama = $nama;
        $this->gaji = $gaji;
       
    }

    public function infogaji() {
        return "$this->nama, $this->gaji";
    }

}


class manajer extends pegawai {
    public $tunjangan ;

    public function __construct( $nama, $gaji, $tunjangan) {
        parent::__construct($nama, $gaji) ; 
        $this->tunjangan=$tunjangan ;
    }
        public function infotunjangan() {
                return "$this->tunjangan";
        }
        public function infogaji() {
        $str = "manajer : {$this->nama} | {$this->gaji}  (Rp. {$this->tunjangan}) - tunjangan " ;
        return $str;

   
        
    }
  

} 


class programmer extends pegawai {
        public $bonus;

        public function __construct( $nama, $gaji, $bonus) {
            parent::__construct($nama, $gaji) ; 
            $this->bonus=$bonus ;
        }
        public function infobonus() {
                        return "$this->bonus";
        
        }

        public function infogaji() {
            $str = "programer :  {$this->nama} | {$this->gaji} (Rp. {$this->bonus}) - bonus " ;
                return $str;
            
            
            }
        }


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$pegawai1 = new manajer("Naruto",  3000000, 100000);
$pegawai2 = new programmer("sasuke", 2500000, 50000);

echo $pegawai1->infogaji();
echo "<br>";
echo $pegawai2->infogaji();
