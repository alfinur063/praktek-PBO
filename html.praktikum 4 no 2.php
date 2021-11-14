<?php 
    require_once 'praktikum 4 no 2.php';
?>

<html lang="en">
<head>
<style>
    .alpi{
        width: 200px;
        padding: 200px;
        background: #e98c84;
        color: white;
        margin: 0 auto; 
        align: center;
        font-size: 20px;
    }
</style>
</head>
<body > 
    <br><br>

<div class="alpi">


<h1>Soal No 2</h1>

    <form action="" method="post" >
           <h3>angka 1 :</h3>  <input type="number" name="input1"> 
            <h3>angka 2 :</h3>  <input type="number" name="input2">
            <br>
            <h3>angka 3 :</h3>  <input type="number" name="input3">
            <br>
            <br>
            <button type="submit" name="submit">Submit</button>
          </form>

          <?php 
              if (isset($_POST['submit'])) {
                if (!$_POST['input3']) {
                  $nilai1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                  echo $value1->average(0);
                } else {
                  $nilai1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                  echo $nilai1->average($_POST['input3']);
                }
              }
            ?>
</div>
</body>
</html>