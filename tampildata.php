<?php
// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_dosen");

// Mengambil query
$tampil = mysqli_query($conn, "SELECT * FROM tb_dosen");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS for navbar and table -->
    <style>
        .navbar-nav.ml-auto {
            margin-right: 20px;
        }
        .bi-pencil-square {
            color: blue;
        }
        .bi-trash {
            color: red;
        }
        .table-bordered {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Properti untuk bayangan */
        }
        /* CSS untuk menempatkan SVG gelombang di paling bawah halaman */
        .svg-wave {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: auto;
            z-index: -1; /* Menempatkan di belakang konten utama */
        }

        /* CSS untuk mengatur halaman agar contentnya mengisi seluruh tinggi layar */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            position: relative; /* Perlu untuk posisi absolut SVG */
        }
        .content-wrap {
            min-height: 100%;
            position: relative; /* Perlu untuk posisi absolut SVG */
        }
    </style>
</head>
<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Data Dosen</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tambahandata.php">Tambah Data</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="profile.php">My Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="content-wrap">
        <div class="container mt-4">
            <h1>Tampil Data Dosen</h1>

            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id Dosen</th>
                        <th>Nomor Induk Dosen</th>
                        <th>Nama Dosen</th>
                        <th>Umur</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($ambil = mysqli_fetch_array($tampil)) : ?>
                        <tr>
                            <td><?php echo $ambil["id_dosen"]; ?></td>
                            <td><?php echo $ambil["nomor_induk_dosen"]; ?></td>
                            <td><?php echo $ambil["nama_dosen"]; ?></td>
                            <td><?php echo $ambil["umur"]; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $ambil['id_dosen']; ?>" style="color: blue;"><i class="bi bi-pencil-square"></i></a>
                                <a href="delete.php?id=<?php echo $ambil['id_dosen']; ?>" style="color: red;" onclick="return confirm('Apakah anda yakin menghapusnya?');"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- SVG untuk wave di bawah halaman -->
        <svg class="svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffd700" fill-opacity="1" d="M0,96L30,112C60,128,120,160,180,192C240,224,300,256,360,245.3C420,235,480,181,540,181.3C600,181,660,235,720,234.7C780,235,840,181,900,165.3C960,149,1020,171,1080,154.7C1140,139,1200,85,1260,64C1320,43,1380,53,1410,58.7L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
