<?php
// Koneksi Database
$conn = mysqli_connect("localhost", "root", "", "db_dosen");

$id = $_GET['id'];

$tb_dosen = mysqli_query($conn, "SELECT * FROM tb_dosen WHERE id_dosen = '$id'");
$row = mysqli_fetch_array($tb_dosen);

// Cek tombol submit
if (isset($_POST["submit"])) {

    $id_dosen = $_POST["id_dosen"];
    $nomor_induk_dosen = $_POST["nomor_induk_dosen"];
    $nama_dosen = $_POST["nama_dosen"];
    $umur = $_POST["umur"];

    // Update query
    $query = "UPDATE tb_dosen SET
                nomor_induk_dosen = '$nomor_induk_dosen',
                nama_dosen = '$nama_dosen',
                umur = '$umur'
              WHERE id_dosen = '$id'";

    mysqli_query($conn, $query);
    header("Location: tampildata.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 50px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f7f7f7;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Dosen</h1>
        <form action="" method="POST">
            <input type="hidden" name="id_dosen" value="<?php echo $row["id_dosen"] ?>"><br>
            <div class="form-group">
                <label for="nomor_induk_dosen">Nomor Induk Dosen:</label>
                <input type="text" class="form-control" id="nomor_induk_dosen" name="nomor_induk_dosen" value="<?php echo $row["nomor_induk_dosen"] ?>">
            </div>
            <div class="form-group">
                <label for="nama_dosen">Nama Dosen:</label>
                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?php echo $row["nama_dosen"] ?>">
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="text" class="form-control" id="umur" name="umur" value="<?php echo $row["umur"] ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
