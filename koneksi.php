<?php
 $db_host = "localhost";
 $db_user = "root";
 $db_pass = "";
 $db_name = "db_dosen";

 $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

 if(mysqli_connect_errno()){
    echo'Koneksi gagal ! : '.mysqli_connect_error();
 }
?>