<html>
    <head>
        <title>Daftar Peserta Kelas</title>
        <link rel="stylesheet" type="text/css" href="cssTable.css">
    </head>
    <body>
        <a href="formPendaftaran.html">[+]Tambah Baru</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>  </th>
                
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM peserta";
                $result=mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id"] ?></td>
                <td> <?php echo $row["nama"] ?></td>
                <td> <?php echo $row["email"] ?></td>
                <td> <?php echo $row["noTelp"] ?></td>
                <td> <?php echo $row["alamat"] ?></td>
                <td>
                    <div class="btn">
                        <a href="editForm.php?id=<?php echo $row['id']; ?>">Edit</a>
                    </div>
                    <div class="btn1">
                        <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php
                    }
                }else{
                    echo "Data masih kosong";
                }
            ?>
        </table>
    </body>
</html>