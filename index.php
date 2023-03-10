<?php 
session_start();

    if( !isset($_SESSION["login"])){
        header("location: login.php");
        exit;
    }

    require 'functions.php';
    $mahasiswa = mysqli_query($conn, "SELECT * FROM mahasiswa");
    
    // tombol cari di ketik

        if(isset($_POST["cari"])){
            $mahasiswa = cari($_POST["keyword"]);
        }  





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel mahasiswa</title>
    <link rel="stylesheet" href="src/index.css">
</head>

<body>

        <a href="logout.php">Logout</a>

    <h1>Tabel Mahasiswa</h1>
    <div class="container">
    <a class="add" href="tambah.php">Tambah data mahasiswa</a>
    <br><br>    
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="cari siswa" autocomplete="off" size="40">
        <button type="submit" name="cari">cari!</button>
    </form>

<br>
    <table border="1" cellpadding="30" cellspacing="3">   
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
                <a href="ubah.php?id=<?= $mhs["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return 
                confirm('yakin?');">hapus</a>
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
    </div>
</body>

</html>