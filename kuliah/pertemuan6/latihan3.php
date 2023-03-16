<?php 
// ARRAY ASSOCIATIVE
// Array yang index adalah string yang kita buat sendiri

$mahasiswa = [
                [
                 'nama' =>'Hilmi',
                 'binatang' => '🐓', 
                 'makanan' => '🍗'
                ], 
                [
                 'nama' =>'Herdy', 
                 'binatang' => '🐄', 
                 'makanan' => '🍜'
                ], 
                [
                 'nama'=>'Miftah', 
                 'binatang'=>'🐐',
                 'makanan' =>'🍕'
                ], 
                [
                 'nama'=>'Sena', 
                 'binatang'=>'🐇',
                 'makanan' =>'🍛'
                ], 
                [
                 'nama'=>'Ryan', 
                 'binatang'=>'🦢',
                 'makanan' =>'🍝'
                ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <h2>Daftar Mahasiswa<h/2>
 <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>   
      <li>Nama: <?= $mhs['nama']; ?></li>
      <li>Makanan Favorit: <?= $mhs['binatang']; ?></li>
      <li>Peliharaan: <?= $mhs['makanan']; ?></li>
    </ul>
 <?php endforeach; ?>
</body>
</html>