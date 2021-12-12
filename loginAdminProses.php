<?php
    include "koneksi.php";

    $username = $_POST['uname'];
    $password = md5($_POST['pwd_admin']);

    $query = "SELECT * FROM admin WHERE uname = '$username' and pwd_admin = '$password' ";
    $result = mysqli_query($connect, $query);
    $cek = mysqli_num_rows($result);

    if($cek){
        echo "<script> 
                alert('Berhasil Log in');
                document.location.href = 'halamanAdmin.html';
            </script>
            ";  
    }else{
        echo "<script> 
                alert('Log in gagal, silahkan coba lagi');
                document.location.href = 'loginForm.html';
            </script>
            "  . mysqli_error($connect);
    }
?>