<?php
$conn = mysqli_connect("localhost","root","","db_dosen");

//menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($conn, "DELETE FROM tb_dosen WHERE id_dosen = '$id'");

// mengalihkan halaman kembali ke tampil.php

header("location:tampildata.php");

?>