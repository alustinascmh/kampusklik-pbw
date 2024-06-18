<?php

    $hostname = "localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "kampusklik";

    $koneksi = mysqli_connect($hostname,$userDataBase,$passwordUser,$databaseName) or die (mysqli_error());

    // if($koneksi){
    //     echo "berhasil";
    // }else echo "gagal";

?>