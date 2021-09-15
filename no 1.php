<!DOCTYPE HTML>  
<html>
<head> <title>praktikum 1</title>
</head>
<body>  
<h2> NO 1</h2> 
<h3>menentukan bilangan ganjil,genap,positif, dan negatif</h3> <hr>
<p>Nama = Alfi Nur Inayati Ningrum </p> 
<p>Nim  = 20051397063</p>


	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  Bilangan: <input type="text" name="bil">
	  <br><br>
	  <input type="submit" name="cari" value="cari">  
	</form>
	<br>
	
    <?php
        class bilangan {
            public $ganjil,
                    $genap,
                    $positif,
                    $negatif;
        
        }

        $bil = new bilangan  () ;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			
			if ($bil % 2 == 0){ 
			    echo "$bil  Genap";  
		}else {
			    echo "$bil  Ganjil";  
		} 
        echo "<br>";
            if ($bil > 0) { 
                echo "$bil positif" ; 
        }else {
                echo "$bil negatif" ;
        
    }
		
	}
?>
</body>
</html>