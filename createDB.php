<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($namaHost, $username, $password);

    if($connect){
        echo "Koneksi dengan MySQL berhasil <br>";
    }else{
        echo "Koneksi dengan MySQL gagal <br>; " .mysqli_connect_error();
    }

    $sql = "CREATE DATABASE form_registrasi";
     if(mysqli_query($connect, $sql)){
         echo "Database berhasil dibuat";
     }else{
         echo "Database gagal dibuat <br>" .mysqli_error($connect);
     }

     mysqli_close($connect);