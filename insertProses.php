<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $noTelp = $_GET['noTelp'];
    $alamat = $_GET['alamat'];
    $username = $_GET['username'];
    $password = md5($_GET['pwd']);


    $sql = "INSERT INTO peserta (id, nama, email, noTelp, alamat,username,pwd)
            VALUE('$id', '$nama', '$email', '$noTelp', '$alamat', '$username', '$password')";

    if(mysqli_query($connect, $sql)){
        echo "<script> 
                    alert('Pendaftaran Berhasil');
                    document.location.href = 'halamanPeserta.html';
                </script>
            ";   
    }else{
        echo "<script> 
                    alert('Pendaftaran gagal, silahkan coba lagi');
                    document.location.href = 'formPendaftaran.html';
                </script>
                "  . mysqli_error($connect);
    }
    mysqli_close($connect);
?>