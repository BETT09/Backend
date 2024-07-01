<?php
session_start();

$_SESSION["id_dosen"] ='';
$_SESSION["nama_dosen"] ='';
$_SESSION["username"] ='';

unset ($_SESSION["id_dosen"]);
unset ($_SESSION["nama_dosen"]);
unset ($_SESSION["username"]);

session_unset();
session_destroy();
header('location:index.php');
?>