<?php 

   $conn = mysqli_connect("localhost", "root", "", "phpdasar");

   function query($ambil){
    global $conn;
       $result = mysqli_query($conn, $ambil);
        $rows = [];
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row;
            }
            return $rows;
   }

               // Hapus tambah//////////////////
   function tambah($data){
    global $conn;
    $nrp = htmlspecialchars( $data["nrp"]);
    $nama = htmlspecialchars( $data["nama"]);
    $email = htmlspecialchars( $data["email"]);
    $jurusan = htmlspecialchars( $data["jurusan"]);
    $gambar = htmlspecialchars( $data["gambar"]);

    $query = "INSERT INTO mahasiswa 
            (nrp, nama, email, jurusan, gambar)
                          VALUES
            ('$nrp', '$nama', '$email', '$jurusan', '$gambar')";
    
        mysqli_query($conn, $query);
       return mysqli_affected_rows($conn);
   }

            // Hapus data//////////////////
   function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn); 
    }


            // Hapus ubah//////////////////
    function ubah($data){
        global $conn;
        $id = $data["id"];
        $nrp = htmlspecialchars( $data["nrp"]);
    $nama = htmlspecialchars( $data["nama"]);
    $email = htmlspecialchars( $data["email"]);
    $jurusan = htmlspecialchars( $data["jurusan"]);
    $gambar = htmlspecialchars( $data["gambar"]);

    $query = " UPDATE mahasiswa SET 
                nrp = '$nrp', 
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";


            mysqli_query($conn, $query);
       return mysqli_affected_rows($conn);
    }


?>