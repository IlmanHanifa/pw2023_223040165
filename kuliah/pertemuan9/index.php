<?php 

require('function.php');
$title = 'Home'; 
   $students = [
    [
        "nama" => "Ilman Hanifa",
        "npm" => "223040165",
        "email" => "ilman.223040165@mail.unpas.ac.id"
    ],
    [
        "nama" => "Herdy Syabanul Hakim",
        "npm" => "223040164",
        "email" => "herdy.223040164@mail.unpas.ac.id"
    ]
];
   require('views/index.view.php');
?>
