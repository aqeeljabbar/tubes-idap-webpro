<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal | Personal Finance App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style-login.css">

    <!-- font installation -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <style>
        .btn-primary {
            background-color: #418CFD !important;
            color: #fff !important;
            border: none !important;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="row justify-content-end mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-left">Selamat Datang!</h2>
                        <p>Belum Punya Akun? <a href="daftar.php">Registrasi</a></p>


                        <form action="login.php" method="post">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Tulis emailmu disini" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Tulis passwordmu disini" required>
                            </div>
                            <button type="submit" class="btn btn-outline-primary" style="width : 100%;" name="masuk">Masuk</button>
                            <!-- <a href="daftar.php" class="btn btn-warning">Daftar</a> -->
                        </form>
                    </div>

                    <?php
                        session_start();

                        // sebelumua 'login'
                        // Periksa apakah pengguna sudah login, jika ya, redirect ke halaman login

                        if ( isset($_SESSION['logged_in']) ) {
                            header("Location: index.php");
                            exit;
                        }

                        include("koneksidb.php");

                        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if ( isset($_POST['masuk']) ) {
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            // Query untuk mencari pengguna dengan email yang sesuai
                            // $sql = "SELECT * FROM users WHERE email = '$email'";

                            $sql = "SELECT * FROM users WHERE email = '$email'";
                            $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) == 1) {
                                    $user = mysqli_fetch_assoc($result);
                                    // Verifikasi password
                                    if (password_verify($password, $user['password'])) {

                                        // Jika verifikasi berhasil, set session dan redirect ke halaman beranda
                                        $_SESSION['logged_in'] = true;
                                        $_SESSION['user_id'] = $user['id'];

                                        header("Location: index.php");
                                        exit();
                                        
                                    } else {
                                    echo "Password salah!";
                                    }
                        } else {
                            echo "Email tidak ditemukan!";
                            }
                        }

                        mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>



   

