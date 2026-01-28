<?php 
    // start cek session
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location:login.php");
    }
    // end cek session

   require "functions.php";

   // pagination
   // konfigurasi
   $jumlahDataPerhalaman = 4;
    // $result = mysqli_query($conn,"SELECT * FROM mahasiswa");
    // $jumlahData = mysqli_num_rows($result);
   $jumlahData = count(query("SELECT * FROM mahasiswa"));
   //var_dump($jumlahData);
   $jumlahHalaman = ceil($jumlahData/$jumlahDataPerhalaman); //round,floor,ceil
    //if(isset($_GET["page"])){
    //  $halamanAktif = $_GET["page"];
    //}else{
    //  $halamanAktif = 1;
    //}
    $halamanAktif = (isset($_GET["page"])) ? $_GET["page"] : 1;
    
    // halaman = 2, awal data = 3
    // halaman = 3, awal data = 6
    // halaman = 4, awal data = 9
    
    $awalData = ($jumlahDataPerhalaman*$halamanAktif) - $jumlahDataPerhalaman;
   
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");


   // tombol cari ditekan
   if(isset($_POST["cari"])){
        $mahasiswa = cari($_POST["keyword"]);
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <a href="logout.php">Log out</a>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus="" placeholder="Masukkan keyword pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
    </form>

    <!--Navigasi  -->
    <?php if( $halamanAktif > 1) : ?>
        <a href="?page=<?= $halamanAktif-1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i=1;$i<=$jumlahHalaman;$i++) : ?>
        <?php if($i == $halamanAktif) : ?>
            <a href="?page=<?= $i ?>" style="font-weight:bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?page=<?= $i ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

     <?php if( $halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?= $halamanAktif+1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>
    <div id="container">
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
            foreach($mahasiswa as $mhs):
            ?>
                <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $mhs["id"];?>">Edit</a> | 
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="
                        return confirm('yakin hapus?');
                    ">Delete</a> | 
                    <a href="">View</a>
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
            endforeach;
            ?>       
        </table>
    </div>
    
    <script src="js/script.js"></script>
</body>
</html>