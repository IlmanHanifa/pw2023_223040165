<?php
require('functions.php');

$title = 'Form Tambah Data';

// insert data jika tombol tambah diklik
if (isset($_POST['tambah'])){
    //cek jika data berhasil di tambah
    if (tambah($_POST)> 0 ){
        echo "<script>
        alert('data berhasil di tambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}
require('views/tambah.view.php');
