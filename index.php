<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // tes
        //constanta
        define('gajipokok',5000000);
        define('bonus',500000);
        define('pajak',0.12);
        
        echo"Nama : MICHEL MERBY PURNOMO <br>";
        echo"Absen: 16 <br><br>";
        echo"perhitungan gaji karyawan <br><br>";

       
        $jumlahproyek = 3;
        $totalpendapatan = bonus * $jumlahproyek;
        $totalpendapatan = $totalpendapatan + gajipokok;
        $totalpendapatan = $totalpendapatan - ($totalpendapatan*pajak);
    

        echo"gaji yang anda dapat Rp" . number_format(gajipokok) . "<br>";
        echo"gaji yang anda dapat sepenuhnya adalah Rp. " . number_format($totalpendapatan);

    ?>
</body>
</html>