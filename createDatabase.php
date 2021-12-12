<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($namaHost, $username, $password);

    if($connect){
        echo "Koneksi dengan MySql berhasil <br>";
    }else{
        echo "Koneksi dengan Mysql gagal" . mysqli_connect_error();
    }
    $sql = "CREATE DATABASE registrasi";
    if(mysqli_query($connect, $sql)){
        echo "Database berhasil dibuat";
    }else{
        echo "Database gagal dibuat <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);

    
?>