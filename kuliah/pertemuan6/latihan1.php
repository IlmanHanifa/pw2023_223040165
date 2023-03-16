<?php 
$mahasiswa = [ 'Hilmi' , 'Herdy' , 'Miftah' , 'Sena' , 'Ryan'];
$binatang = [ '🐓' , '🐄' , '🐐' , '🐇' , '🦢'];
$makanan = [ '🍗' , '🍜' , '🍕' , '🍛' , '🍝' ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <h2>Daftar Mahasiswa<h/2>
 <?php foreach ($mahasiswa as $i => $m) : ?>
    <ul>   
      <li>Nama: <?= $m; ?></li>
      <li>Makanan Favorit: <?= $makanan[$i]; ?></li>
      <li>Peliharaan: <?= $binatang[$i]; ?></li>
    </ul>
 <?php endforeach; ?>
</body>
</html>