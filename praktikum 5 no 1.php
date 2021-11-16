<?php 

abstract class pegawai {
    private $nama, 
            $gaji;
           

    public function __construct($nama, $gaji ) {
        $this->nama= $nama;
        $this->gaji= $gaji;
    }

    abstract public function infogaji();

    public function gaji() {
        $alpha= " nama pegawai : {$this->nama} | gaji pegawai : {$this->gaji}";

        return $alpha;
    }

}


class manajer extends pegawai {
    public $tunjangan;

    public function __construct($nama, $gaji, $tunjangan) {
        parent::__construct( $nama, $gaji );
        $this->tunjangan = $tunjangan;
    }

   
    public function infotunjangan() {
        return $this->tunjangan= $tunjangan;
    }
    
    public function infogaji() {
        $str = $this->gaji(). " ~ {$this->tunjangan}. tunjangan";
        return $str;
    }

    
}


class programmer extends pegawai {
    public $bonus;

    public function __construct( $nama, $gaji, $bonus ) {
        parent::__construct($nama, $gaji );
        $this->bonus = $bonus;
    }

    public function infogaji() {
        $str = $this->gaji(). " ~ {$this->bonus}. bonus ";
        return $str;
    }

    public function infobonus(){
        return $this->bonus=$bonus;
    }
}
class Cetakinfogaji {
    public $jumlahgaji = array();


    public function tambahgaji (pegawai $pegawai) {
        $this->jumlahgaji[] = $pegawai;
    }

    public function cetak() {
        $str = "Gaji Pegawai : <br>" ;

        foreach ($this->jumlahgaji as $p) {
            $str .= "-{$p->infogaji()} <br> " ;
        }

        return $str;
    }
}

$pegawai1 = new manajer("Naruto",  3000000, 100000);
$pegawai2 = new programmer("sasuke", 2500000, 50000);


$gajipegawai = new cetakinfogaji();
$gajipegawai->tambahgaji($pegawai1);
$gajipegawai->tambahgaji ($pegawai2);
echo $gajipegawai->cetak();


