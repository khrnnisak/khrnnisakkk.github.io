<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['pwd']);

    $query = "SELECT * FROM peserta WHERE username = '$username' and pwd = '$password' ";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);

    if($cek){
        echo "<script> 
                alert('Berhasil Log in');
                document.location.href = 'halamanPeserta.html';
            </script>
            ";  
    }else{
        echo "<script> 
                alert('Log in gagal, silahkan coba lagi');
                document.location.href = 'loginPeserta.html';
            </script>
            "  . mysqli_error($connect);
    }
?>