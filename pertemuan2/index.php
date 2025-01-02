<?php 
//Pertemuan 2 - PHP
//Sintaks PHP

//Standar Output
//echo,print
//print_r : mencetak isi array
//var_dump : melihat isi dari variable

    print "Deny Febriyanto";
    //var_dump("Deny Febriyanto");

//Penulisan sintaks PHP
//1. PHP di dalam HTML
//2. HTML di dalam PHP
//Variable dan Tipe data
//Variable
$nama = "Danisha Gyandra Maheswari";
//Tidak boleh diawali angka tapi boleh mengandung angka

//Operator
//operator airtmatika
//+ - * / %

//Penggabungan string / concatenation / concat

//Operator assignment
// =, +=, -=, *=, /=, %=, .=

//Operator perbandingan
//<, >, <=, >=, ==, !=

//identitas
//===, !==

//operator logika
//&&, ||, !
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo "Deny Febriyanto"; ?></h1>
    <p><?php echo "Ini adalah paragraph"; ?></p>
    <h1>Halo selamat datang, <?php echo $nama; ?></h1>
    <?php 
        echo "<h1>Halo selamat datang Deny</h1>";
    ?>
    <?php 
        $x = 10;
        $y = 20;
        echo $x*$y;
    ?>

    <?php 
        $nama_depan = "Danisha";
        $nama_belakang = "Gyandra";

        echo $nama_depan." ".$nama_belakang;
    ?>

    <?php 
    $a = 1;
    $a += 5;

    echo $a;
    
    $namas = "Danisha";
    $namas .= " ";
    $namas .= "Gyandra";

    echo $namas;

    var_dump(10<5);

    var_dump(1==="1");

    $xx=10;
    var_dump($xx < 20 && $xx%2 == 0);

    ?>
</body>
</html>