<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_dosen");

//cek tombol submit
if(isset($_POST["submit"])) {
    $id_dosen = $_POST["id_dosen"];
    $nomor_induk_dosen = $_POST["nomor_induk_dosen"];
    $nama_dosen = $_POST["nama_dosen"];
    $umur = $_POST["umur"];

    //insert query
    $query = "INSERT INTO tb_dosen (id_dosen, nomor_induk_dosen, nama_dosen, umur) 
              VALUES ('$id_dosen', '$nomor_induk_dosen', '$nama_dosen', '$umur')";

    mysqli_query($conn, $query);
    header("location: tampildata.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Tambah Data Dosen</h1>

        <form action="" method="POST">
            <div class="form-group">
                <label for="id_dosen">Id Dosen</label>
                <input type="text" class="form-control" id="id_dosen" name="id_dosen">
            </div>
            <div class="form-group">
                <label for="nomor_induk_dosen">Nomor Induk Dosen</label>
                <input type="text" class="form-control" id="nomor_induk_dosen" name="nomor_induk_dosen">
            </div>
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
