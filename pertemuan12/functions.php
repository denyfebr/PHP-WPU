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
        $gambar = htmlspecialchars($data["gambar"]);
        
        // query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nrp','$email','$jurusan','$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
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
        $gambar = htmlspecialchars($data["gambar"]);
        
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
?>