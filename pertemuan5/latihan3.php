<?php 
$mahasiswa = [
        ["Deny Febriyanto","18000036","Teknik Informatika", "denyfebri@gmail.com"],
        ["Suyanto Bun","11000016","Teknik Geologi", "suyantobun@gmail.com"],
        ["Agus Susatyo","09000008","Teknik Lingkugan", "aguspantek@gmail.com"]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>        
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>NRP: <?= $mhs[1]; ?></li>    
        <li>Jurusan: <?= $mhs[2]; ?></li>    
        <li>Email: <?= $mhs[3]; ?></li>            
    </ul>
    <?php endforeach; ?>
</body>
</html>