<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = "DELETE FROM peserta WHERE id='$id'";
    $result=mysqli_query($connect, $query);

    if($result){
        echo "<script> 
                    alert('Data berhasil dihapus');
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
?>