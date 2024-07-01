<?php
// koneksi ke database 
include "koneksi.php";

// memulai session
session_start();

if(!isset($_SESSION["username"])) {
    echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
    exit;
}

$id_dosen = $_SESSION["id_dosen"];
$nama_dosen = $_SESSION["nama_dosen"];
$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .card {
            max-width: 400px;
            margin: 0 auto; /* Untuk mengatur agar card berada di tengah */
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 30px;
        }
        .card-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .card-text {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .btn-logout {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center"> <!-- Menggunakan grid system untuk center -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Dosen</h5>
                        <p class="card-text"><strong>Username:</strong> <?php echo $username; ?></p>
                        <p class="card-text"><strong>Nama Dosen:</strong> <?php echo $nama_dosen; ?></p>
                        <p class="card-text"><strong>Id Dosen:</strong> <?php echo $id_dosen; ?></p>

                        <a href="logout.php" class="btn btn-danger btn-logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
