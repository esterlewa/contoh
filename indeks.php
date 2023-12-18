<?php
require 'connention.php';
$mahasiswa =mysqli_query($sonb, "SELECT * FROM mhs2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>halaman utama</h1>
  <p>Data mahasiswa</p>
  <p><?
  foreach ($mahasiswa as $mhs) {
    echo  $mhs['nim']." |".
    $mhs['nama' ]." | ".
    $mhs['jk']. " | ".
    $mhs['prodi ']. "| ".
    $mhs['alamat ']. "<br>";
  } 
  ?></p> 
</body>
</html>
