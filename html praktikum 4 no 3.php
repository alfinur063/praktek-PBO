<?php
    require_once 'proses praktikum4 no3.php';
?>
<html>
    <head>
        <style>
            .table{
                margin: auto;
                font-family: sans-serif;
                border-collapse: collapse;
            }

            .table, td{
                border: 1px solid;
                padding: 8px 10px;
                width: 250px;
                font-size: 30px;
            }

            .cans{
                align:center;
                font-size: 20px;
            }
        </style>
        
    </head>
    <body>
        <div class="cans">
            <br><br>
            <h1 align="center"> Objek Karakteristik Katak dan junior Frogs</h1>
    <table align="center">
        <tr align="center" color="#a667cf">
            <td > <b>objek</b> </td>
            <td><b>umur</b></td>
            <td><b>nama</b></td>
            <td><b>panjangekor</b></td>
            <td><b>carabergerak</b></td>
        </tr>
        <tr align="center" >
            <td >01</td>
            <td><?php echo $binatang1->getnumurkatak(); ?> </td>
            <td><?php echo $binatang1->getnamakatak(); ?></td>
            <td>-</td>
            <td><?php echo $binatang1->getcarabergerak(); ?></td>
        </tr>
        <tr align="center" >
            <td >02</td>
            <td><?php echo $binatang2->getnumurkatak(); ?> </td>
            <td><?php echo $binatang2->getnamakatak(); ?></td>
            <td><?php echo $binatang2->getpanjangekor(); ?></td>
            <td><?php echo $binatang2->getcarabergerak(); ?></td>
        </tr>
        
    </table>
</div>
</body>
</html> 

