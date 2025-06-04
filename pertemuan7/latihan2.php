<?php 
// SUPERGLOBALS
// variable global milik PHP
// merupakan Array Associative

// var_dump($_GET)

//var_dump($_SERVER)

// echo $_SERVER["SERVER_SOFTWARE"]

// $_GET

// $_GET["nama"] = "Deny Febriyanto";
// $_GET["nrp"] = "18000036";

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
                ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan3.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>                
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>
