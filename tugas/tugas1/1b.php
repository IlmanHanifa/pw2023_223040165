<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 1b.php</title>
</head>
<body>


<?php $angka = "65";?>
<?php echo 'Aku adalah <b>'. $angka . '</b><br>';
?>

<?php echo 'Jika aku dikali 5, maka aku sekarang menjadi <b>'. ($angka *= 5) . '</b><br>'
 ?>
<?php echo 'Jika aku dibagi 2, maka aku sekarang menjadi <b>'. ($angka /= 2) . '</b><br>'
 ?>
<?php echo 'Jika aku ditambah 75, maka aku sekarang menjadi <b>'. $angka+75 . '</b><br>' 
 ?>
<?php echo 'Jika aku dikurang 20, maka aku sekarang menjadi <b>'. $angka-20 . '</b><br>'
?>
</body>
</html>