<?php
 class reratanilai {
        public $nilai1,
               $nilai2;


    public function __construct($nilai1, $nilai2) {
            $this->nilai1 = $nilai1;
            $this->nilai2 = $nilai2;
    }

    public function average($nilai3 = 0){
        if ($nilai3 == 0) {
            $str = $this->nilai1 . ' + ' . $this->nilai2 . ' / 2 = ';
            return $str . ($this->nilai1 += $this->nilai2 ) / 2;

        } else {
            $str ='(' . $this->nilai1 . ' + ' . $this->nilai2 . ' + ' . $this->nilai2 . ') / 3 = ';
            return $str . ($this->nilai1 += $this->nilai2 += $nilai3 ) / 3;
        }
    }
}


class RerataNilai2 extends RerataNilai{
    public function __construct($nilai1, $nilai2){
        parent::__construct($nilai1, $nilai2);
    }

    public function average($nilai3 = 0){
        return parent::average($nilai3);
    }
}

?>

