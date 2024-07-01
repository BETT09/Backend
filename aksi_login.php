<?php

include "koneksi.php";

session_start();

//meyimpan nilai username & password yang dikirim dari form login
$username = $_POST["username"];
$p = md5($_POST["password"]);


//cek username & password di database
$query      = "SELECT * FROM user WHERE username ='".$username."' and password='".$p."' LIMIT 1";
$hasil      = mysqli_query($koneksi, $query);
$cek        = mysqli_num_rows($hasil);


        if($cek>0) {
                 $row = mysqli_fetch_assoc($hasil);
                $_SESSION["id_dosen"]=$row["id_dosen"];
                $_SESSION["nama_dosen"]=$row["nama_dosen"];
                $_SESSION["username"]=$row["username"];

    header("location: tampildata.php");
} else {
    echo "Username atau Password anda salah <br><a 
    href='index.php'>Kembali</a>";
}
?>