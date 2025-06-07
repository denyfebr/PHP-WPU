<?php 
    $conn = mysqli_connect("localhost","admin","Sinarmasdb@973","phpdasar");

    // ambil data dari table mahasiswa / query data mahasiswa

    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    
    // ambil data (fetch) dari mahasiswa dari object result
    //mysqli_fetch_row() mengembalikan array numeric
    //mysqli_fetch_assoc() mengembalikan array associative
    //mysqli_fetch_array() mengembalikan array numeric dan associative
    //mysqli_fetch_object() mengembalikan object $mhs->nrp

    //$mhs = mysqli_fetch_assoc($result);
    //var_dump($mhs);

    // while($mhs = mysqli_fetch_assoc($result)){
    //     var_dump($mhs);
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>       
        <?php 
        $i=1;
        while($mhs = mysqli_fetch_assoc($result)){
        ?>
            <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Edit</a> | <a href="">Delete</a> | <a href="">View</a>
            </td>
            <td>
                <img src="img/<?= $mhs["gambar"]; ?>" width="50">
            </td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        </tr>
        <?php
            $i++;
        }
        ?>
       
    </table>
</body>
</html>