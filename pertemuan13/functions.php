<?php 
    //koneksi
    $conn = mysqli_connect("localhost","admin","Sinarmasdb@973","phpdasar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data){

        global $conn;

        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        
        // upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }
                
        // query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nrp','$email','$jurusan','$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload(){

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tempName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload
        if($error === 4){
            echo "<script>
                    alert('pilih gambar terlebih dahulu!');
                </script>";
            return false;
        }

        // cek apakah yang diupload adalah file gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.',$namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
              echo "<script>
                    alert('yang Anda upload bukan gambar!');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if($ukuranFile > 1000000){
              echo "<script>
                    alert('Ukuran gambar terlalu besar!');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar diupload
        // generate nama gambar baru
         //var_dump($namaFileBaru); die;

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        move_uploaded_file($tempName,'img/'.$namaFileBaru);

        return $namaFileBaru;

    }

    function hapus($id){
        global $conn;
        // query delete data
        $query = "DELETE FROM mahasiswa WHERE id = '$id'";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = htmlspecialchars($data["id"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah user pilih gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        }
        else{
            $gambar = upload();
        }

        

        // query update data
        $query = "UPDATE mahasiswa
                    SET
                        nama = '$nama',
                        nrp = '$nrp',
                        email = '$email',
                        jurusan = '$jurusan',
                        gambar = '$gambar'
                    WHERE id = '$id'
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM mahasiswa
                    WHERE
                    nama LIKE '%$keyword%' OR 
                    nrp LIKE '%$keyword%' OR 
                    email LIKE '%$keyword%' OR 
                    jurusan LIKE '%$keyword%' 
                ";
        return query($query);
    }
?>