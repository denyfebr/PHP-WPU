<?php 
// $mahasiswa = [
//         ["Deny Febriyanto","18000036","Teknik Informatika", "denyfebri@gmail.com"],
//         ["Suyanto Bun","11000016","Teknik Geologi", "suyantobun@gmail.com"],
//         ["Agus Susatyo","09000008","Teknik Lingkugan", "aguspantek@gmail.com"]
//     ]

//ARRAY ASSOCIATIVE
//Sama seperti Array
//Key nya yang kita buat sendiri

$mahasiswa = [
                [
                    "nama" => "Deny Febriyanto",
                    "nrp" => "18000036",
                    "jurusan" => "Teknik Informatika", 
                    "email" => "denyfebri@gmail.com",
                    "gambar" => "Deny.PNG"
                ],
                [
                    "nama" => "Gunaefi",
                    "nrp" => "16000032",
                    "jurusan" => "Teknik Desain", 
                    "email" => "guna@gmail.com",
                    "gambar" => "Guna.png",
                    "tugas" => [78,59,60]
                ],
                [
                    "nama" => "Riswandi",
                    "nrp" => "20000020",
                    "jurusan" => "Teknik Informatika", 
                    "email" => "riswandi@gmail.com",
                    "gambar" => "Riswandi.jpg"
                ],
                [
                    "nama" => "Audityo Perdana",
                    "nrp" => "15000034",
                    "jurusan" => "Teknik Desain", 
                    "email" => "didit@gmail.com",
                    "gambar" => "Didit.jpg"
                ],
                [
                    "nama" => "Andri",
                    "nrp" => "23000023",
                    "jurusan" => "Teknik Desain", 
                    "email" => "andri@gmail.com",
                    "gambar" => "Andri.jpg"
                ],
                [
                    "nama" => "Martha",
                    "nrp" => "17000078",
                    "jurusan" => "Akuntansi", 
                    "email" => "martha@gmail.com",
                    "gambar" => "Martha.jpg"
                ],
                [
                    "nama" => "Maria Geofrida",
                    "nrp" => "23000123",
                    "jurusan" => "Ilmu sekretaris", 
                    "email" => "geof@gmail.com",
                    "gambar" => "Geo.png"
                ],
                [
                    "nama" => "Eva Maria",
                    "nrp" => "23000122",
                    "jurusan" => "Ilmu sekretaris", 
                    "email" => "evam@gmail.com",
                    "gambar" => "Eva.png"
                ],
                [
                    "nama" => "Anita",
                    "nrp" => "13000133",
                    "jurusan" => "Komunikasi", 
                    "email" => "anita@gmail.com",
                    "gambar" => "Anita.jpg"
                ]
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
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>        
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NRP: <?= $mhs["nrp"]; ?></li>    
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>    
        <li>Email: <?= $mhs["email"]; ?></li>            
    </ul>
    <?php endforeach; ?>
</body>
</html>