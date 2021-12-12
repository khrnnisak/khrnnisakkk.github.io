<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "registrasi";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    if($connect){
        echo "Koneksi dengan MySql berhasil <br>";
    }else{
        echo "Koneksi dengan Mysql gagal" . mysqli_connect_error();
    }
    $sql = "CREATE TABLE peserta(
        id INT PRIMARY KEY,
        nama VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        noTelp VARCHAR(12) NOT NULL,
        alamat VARCHAR(50) NOT NULL)";
    if(mysqli_query($connect, $sql)){
        echo "Tabel peserta berhasil dibuat";
    }else{
        echo "Tabel peserta gagal dibuat <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);

    
?>