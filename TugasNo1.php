<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $saldoAwal = 2000000;
    $bunga = 0.03;
    $bulan = 11;
    $jumlahbunga = $saldoAwal * $bunga;
    echo "Jumlah Bunga = $jumlahbunga <br>";
    $totalbunga = $jumlahbunga * $bulan;
    echo " Total Bunga = $totalbunga <br>";
    $saldoAkhir = $saldoAwal + $totalbunga;// lengkapi pada perhitungan $saldo akhir
    

    echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".
    $saldoAkhir. ",-";
?>
    
</body>
</html>