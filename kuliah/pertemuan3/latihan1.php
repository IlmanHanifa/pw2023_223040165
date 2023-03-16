<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
</head>
<body>
    <?php 
     echo "Mulai <br>";
    while(false){
        echo "Hello World! <br>";
    }
     echo "Selesai <br>"; ?>
<!-- 
while (kondisi terminasi){
 aksi 
 increament/ decreament
} -->


<?php 
 $nilai_awal = 2;
 while($nilai_awal <=10){
    echo "Hello World! $nilai_awal x <br>";
    $nilai_awal += 1; //incereament

 }

?>

<br><br>
<?php 
$nilai_angkot =1;
while($nilai_angkot <=10){
    echo "Angkot no.$nilai_angkot beroperasi dengan baik. <br>";
    $nilai_angkot+=1;
}
?>
<br><br>
<br><br>
<?php 
$no_angkot =1;
while($no_angkot <=10){
    echo "Angkot no.$no_angkot beroperasi dengan baik. <br>";
    $no_angkot++;
}
?>
</body>
</html>