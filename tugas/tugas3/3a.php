<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas3a</title>
</head>
<body>
<?php 

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
    echo "Jari Jari = $r cm <br>";
    echo "Luas lingkaran = " . (3.14 * $r * $r) . " cm² <hr>";
}

hitungLuasLingkaran(10);

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r) {
    echo "Jari Jari = $r cm <br>";
    echo "Keliling lingkaran = " . (3.14 * ($r + $r)) . " cm <hr>";
}

hitungKelilingLingkaran(20);

?>
</body>
</html>