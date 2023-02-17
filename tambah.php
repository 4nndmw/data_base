<?php 
  $conn =  mysqli_connect("localhost", "root", "", "phpdasar");
  
  if (isset($_POST["submit"])){
    
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];
    
    $query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan, gambar)
    VALUES ('$nrp', '$nama', '$email', '$jurusan', '$gambar')";
    
        mysqli_query($conn, $query);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

     <form action="" method="POST">  <!-- data yang siap di isi pada menu form -->
        <ul>
            <li>
                <label for="nrp"> nrp :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama"> nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email"> email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan"> jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar"> gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah!</button>
            </li>
        </ul>
    </form>

</body>
</html>