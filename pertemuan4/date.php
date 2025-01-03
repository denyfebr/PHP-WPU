<?php 
    //Date 
    //untuk menampilkan tanggal dengan format tertentu
    //echo date("l, d-M-y");

    //Time
    //UNIX timestamp/EPOCH time
    // detik yg sdh berlalu sejak 1 jan 1970
    //echo time();

    //echo date("l, d M y", time()+60*60*24*3);

    //mktime
    //membuat sendiri detik
    //mktime(0,0,0,0,0,0)
    //mktime(jam,menit,detik,bulan,tanggal,tahun)
    //echo date("l",mktime(0,0,0,2,18,1988));

    //strtotime
    echo date("l",strtotime("18 feb 1988"));
?>