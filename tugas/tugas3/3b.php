<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas3b</title>
</head>
<body>
<?php 
 
 
 function urutanAngka($angka){
    $j = 1;
    for($i = 1; $i <= $angka; $i++){
        for($u = 1; $u <= $i; $u++){
            echo $j . " ";
            $j++;
        }
        echo "<br>";
    }
 }

 urutanAngka(5);

?>
</body>
</html>