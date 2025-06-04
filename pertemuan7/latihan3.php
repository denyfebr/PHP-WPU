<?php 
// Cek apakah ada pengiriman data dari $_GET di latihan 2.php

if(!isset($_GET["nama"])||
    !isset($_GET["nrp"])||
    !isset($_GET["jurusan"])||
    !isset($_GET["email"])||
    !isset($_GET["gambar"])
){
    //redirect
    header("Location: latihan2.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
         <li>
            <img src="img/<?= $_GET["gambar"]; ?> ?>">
        </li>        
        <li>Nama: <?= $_GET["nama"]; ?></li>
        <li>NRP: <?= $_GET["nrp"]; ?></li>    
        <li>Jurusan: <?= $_GET["jurusan"]; ?></li>    
        <li>Email: <?= $_GET["email"]; ?></li>      
    </ul>

    <a href="latihan2.php">Back</a>
</body>
</html>