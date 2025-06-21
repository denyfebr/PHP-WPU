<?php 

    // start cek session
    session_start();

    if(!isset($_SESSION["login"])){
        header("Location:login.php");
    }
    // end cek session

   require "functions.php";

    // Ambil data di URL
    $id = $_GET["id"];

    // Query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = '$id'")[0];

    // Cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        // var_dump($_POST);
       
        // cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0){
            echo "
            <script>
                alert('Data berhasil dirubah');
                document.location.href='index.php';
            </script>
            ";
        }
        else
        {
            echo "
            <script>
                alert('Data gagal dirubah');
                document.location.href='index.php';
            </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs['nrp']; ?>" required>
                <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
                <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs['nama']; ?>" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" value="<?= $mhs['email']; ?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']; ?>" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src = "img/<?= $mhs['gambar'] ?>" width="100px"><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Back</a>
</body>
</html>