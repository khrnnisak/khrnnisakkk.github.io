<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $noTelp = $_GET['noTelp'];
    $alamat = $_GET['alamat'];

    $sql = "UPDATE peserta SET nama='$nama', email='$email', noTelp='$noTelp', alamat='$alamat' WHERE id='$id'";
    $result=mysqli_query($connect, $sql);

    if(mysqli_query($connect, $sql)){
        echo "<script> 
                    alert('Data berhasil diubah');
                    document.location.href = 'dataPeserta.php';
                </script>
            "; 
    }else{
        echo "<script> 
                    alert('Proses gagal, silahkan coba lagi');
                    document.location.href = 'dataPeserta.php';
                </script>
                "  . mysqli_error($connect);
    }
    mysqli_close($connect);
?>