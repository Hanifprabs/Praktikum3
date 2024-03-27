<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Fungsi untuk menghitung luas alas kerucut
function luas_alas_kerucut($r) {
    return M_PI * $r * $r;
}

// Fungsi untuk menghitung luas permukaan kerucut
function luas_permukaan_kerucut($r, $s) {
    return M_PI * $r * ($r + $s);
}

// Input radius (r) dan tinggi (s) dari kerucut secara manual
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $r = $_POST["radius"];
    $s = $_POST["tinggi"];

    // Hitung luas alas dan luas permukaan kerucut
    $luas_alas = luas_alas_kerucut($r);
    $luas_permukaan = luas_permukaan_kerucut($r, $s);

    // Menampilkan hasil
    echo "Luas alas kerucut dengan radius $r adalah: " . number_format($luas_alas, 2) . " satuan luas. <br>";
    echo "Luas permukaan kerucut dengan radius $r dan tinggi $s adalah: " . number_format($luas_permukaan, 2) . " satuan luas.";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    Masukkan nilai radius (r) kerucut: <input type="text" name="radius"><br>
    Masukkan nilai tinggi (s) kerucut: <input type="text" name="tinggi"><br>
    <input type="submit" value="Hitung">
</form>

    
</body>
</html>