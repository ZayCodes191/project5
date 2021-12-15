<?php
  
 $host = '103.31.39.50';
 $user = 'project5db';
 $pass = 'project5db';
 $db_name = 'project5db';

 $conn = mysqli_connect($host,$user,$pass,$db_name);
 if (!$conn) {
    die ('Gagal terhubung MySQL: '. mysqli_connect_error());
 }

echo "berhasil";

?>

<html lang="en">

<head>
  <title>Document</title>
  </head>
  
  <body>
    <img src="Foto Fakih.jpg" alt="">
  </body>
    </html>   
  
