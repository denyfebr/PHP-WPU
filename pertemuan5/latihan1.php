<?php 
//cara lama
$hari = array("Senin","Selasa","Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123,"tulisan",false];

//Menampilkan array ke layar
//var_dump()/print_r
// var_dump($hari);
// echo "<br>";
print_r($bulan);

//menambahkan elemen baru pada array
var_dump($hari);
$hari[]="Kamis";
echo "<br>";
var_dump($hari);
$hari[]="Jumat";
echo "<br>";
var_dump($hari);
echo "<br>";

$foo = "example";
print "foo is $foo"; // foo is example
print PHP_EOL;
echo "<br>";
$fruits = ["lemon", "orange", "banana"];
print implode(" and ", $fruits); // lemon and orange and banana
print PHP_EOL;
?>