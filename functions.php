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
?>