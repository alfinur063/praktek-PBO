<html>
    <head>
        <title>praktikum 1</title>
    </head>
    <body>
    <h2> NO 2</h2> 
    <h3>program untuk meng-generate deret</h3> <hr>
    <p>Nama = Alfi Nur Inayati Ningrum </p> 
    <p>Nim  = 20051397063</p>
        
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
        nilai awal: <input type="text" name="nilaiawal"> <br>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
        beda: <input type="text" name="beda"> <br>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
        suku: <input type="text" name="suku">
        <br><br>
        <input type="submit" name="cari" value="cari">
            <br> <br>
        <?php

                
                 if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nilai_awal = $_POST['nilaiawal'];
                    $beda = $_POST['beda'];
                    $suku = $_POST['suku'];
                 }
           
                    for ($i=0; $i < $suku; $i++) {
                       $nilai_awal = $nilai_awal + $beda;
                       //$awal = $keN;
                       echo $nilai_awal.'  ';
                     }
                
                                              
                       

                    
                
            ?>
        </body> 
    </html>
