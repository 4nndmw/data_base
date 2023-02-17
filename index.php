<?php 
    require 'functions.php';
    $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel mahasiswa</title>
</head>

<body>
    <h1>Tabel Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>    
    <table border="1" cellpadding="10" cellspacing="0">   
    <tr>
            <th>no</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nrp</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $mhs): ?>

        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">edit</a> |
                <a href="">delete</a>
            </td>
            <td><img src="img/<?= $mhs["gambar"] ?>" width="80"></td>
            <td><?= $mhs["nrp"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>