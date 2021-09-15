<!DOCTYPE HTML>  
<html>
<head> <title>praktikum 1</title>
</head>
<body>  
<h2> NO 3</h2> 
<h3>daftar buku komik</h3> <hr>
<p>Nama = Alfi Nur Inayati Ningrum </p> 
<p>Nim  = 20051397063</p>

<?php
                        class komik {
                            public $judul , 
                                   $nama_pengarang ,
                                   $tahun_terbit ,
                                   $harga_beli ,
                                   $harga_jual;


                        
                            public function __construct( $judul = "judul", $nama_pengarang = "nama_pengarang", $tahun_terbit = "tahun_terbit", $harga_beli= "harga_beli", $harga_jual = "harga_jual") {
                                            $this->judul = $judul;
                                            $this->nama_pengarang = $nama_pengarang;
                                            $this->tahun_terbit = $tahun_terbit;
                                            $this->harga_beli= $harga_beli;
                                            $this->harga_jual =$harga_jual;
                            }
                        
                           public function getlabel() {
                             return "$this->nama_pengarang, $this->tahun_terbit";
                        
                            
                             }
                        
                        }


                                class cetakinfoproduk {
                                        public function cetak  ( $komik) {
                                                $str = "{$komik->judul} | {$komik->getlabel()}, (Rp. {$komik->harga_beli}), (Rp. {$komik->harga_jual})";  
                                                return $str;
                                        }

                                }
                                                $komik1 = new komik ("The big sleep", "raymond chandler", "1946", "100.000","80.000");
                                                echo "<br>";
                                                $komik2 = new komik ("The murder of roger ackroyd", "agatha christie", "1926", "65.000", "52.000");
                                                echo "<br>";
                                                $komik3 = new komik ("Detective conan", "gosho aoyama", "1996", "50.000", "46.000");
                                                    
                                                    $infoproduk1 = new cetakinfoproduk();
                                                    echo $infoproduk1->cetak($komik1);
                                                    echo "<br>";
                                                    $infoproduk2 = new cetakinfoproduk();
                                                    echo $infoproduk2->cetak($komik2);
                                                    echo "<br>";
                                                    $infoproduk3 = new cetakinfoproduk();
                                                    echo $infoproduk3->cetak($komik3);
                                                    echo "<hr>";
                       

                     ?>

                        </body>
                </html>

                        
