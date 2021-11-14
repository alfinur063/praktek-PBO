
<?php 
class orang {
    protected $nama,
              $umur;

              public function __construct ($nama, $umur) {
                  $this->nama= $nama;
                  $this->umur= $umur;
    }
}

class dosen extends orang {
    protected $nip ;

            public function __construct ($nama,$umur,$nip) {
                parent::__construct ($nama, $umur);
                $this->nip= $nip;
            }

            public function dosen1(){
                $dosen1= "nama = {$this->nama}" ;
             return $dosen1;
            }

            public function dosen2(){
                $dosen2= "nama | nip = {$this->nama} | {$this->nip}" ; 
            return $dosen2;
            }
            public function dosen3(){
              $dosen3= "nama | nip | umur = {$this->nama} | {$this->nip} | {$this->umur}" ; 
            return $dosen3;
            }
}

                $dosenA = new dosen ("kim tehyung","1234567", "26");
                $dosenB = new dosen ("alpi nur", "8910111", "20");

                echo $dosenA->dosen1();
                echo "<br>";
                echo $dosenA->dosen2();
                echo "<br>";
                echo $dosenA->dosen3();
                echo "<br>";
                echo "<br>";
                echo $dosenB->dosen1();
                echo "<br>";
                echo $dosenB->dosen2();
                echo "<br>";
                echo $dosenB->dosen3();

?>
