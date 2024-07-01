<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 50px;
            margin: 0;
            position: relative;
            overflow-x: hidden;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: transparent;
            padding: 30px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            position: relative;
            z-index: 1;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }
        #submit {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #submit:hover {
            background-color: #0056b3;
        }
        .svg-wave {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100vw;
            height: auto;
            fill: #0099ff;
            z-index: 0;
        }
        .register-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <form action="aksi_login.php" method="POST">
        <h2>FORM LOGIN - Sistem Dosen</h2>
        <hr/>

        <div class="form-group">
            <label for="username">Username :</label>
            <input id="username" name="username" class="form-control" placeholder="Enter username" type="text" required>
        </div>

        <div class="form-group">
            <label for="password">Password :</label>
            <input id="password" name="password" class="form-control" placeholder="Enter password" type="password" required>
        </div>

        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Login</button>

        <div class="register-link">
            <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
        </div>
    </form>

    <!-- SVG untuk wave -->
    <svg class="svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,170.7C384,181,480,171,576,144C672,117,768,75,864,80C960,85,1056,139,1152,176C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
