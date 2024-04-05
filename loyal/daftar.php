<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal | Daftar Admin</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link rel="stylesheet" href="style-login.css">
     
     <!-- font installation -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">

     <style>
        .btn-outline-primary {
            background-color: #fff !important;
            color: #418CFD !important;
            border: #418CFD solid 0.8px !important;
        }

        .btn-outline-primary:hover {
            background-color: #418CFD !important;
            color: #fff !important;
            border: none !important;
        }

     </style>

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-end">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Registrasi</h4>
                        <p>Sudah Punya Akun? <a href="login.php">Masuk</a></p>
                    </div>

                    <div class="card-body">
                        <form action="" method="post" id="registrationForm">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Tulis emailmu disini" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Tulis passwordmu disini" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirm" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Tulis ulang passwordmu disini"required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                                <label class="form-check-label" for="agreeTerms">Saya setuju dengan syarat dan ketentuan</label>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width : 100%;">Daftar</button>
                        </form>

                        <?php
                        
                        include("koneksidb.php");

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $password_confirm = $_POST['password_confirm'];

                        // Validasi konfirmasi password
                        if ($password !== $password_confirm) {
                            echo "Konfirmasi password tidak sesuai.";
                            exit();
                        }

                        // Cek apakah email sudah terdaftar sebelumnya
                        $sql_check_email = "SELECT * FROM users WHERE email = '$email'";
                        $result_check_email = mysqli_query($conn, $sql_check_email);
                        if (mysqli_num_rows($result_check_email) > 0) {
                            echo "Email sudah terdaftar, silakan gunakan email lain.";
                            exit();
                        }

                        // Hash password sebelum disimpan ke database
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                        // Query untuk menambahkan user ke database
                        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

                        if (mysqli_query($conn, $sql)) {
                            // Jika berhasil ditambahkan, tampilkan pesan sukses
                            header("Location: login.php");
                                exit();
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        }

                        mysqli_close($conn);
                        ?>
                    </div>

                    

                    

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS for password matching validation -->
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('password_confirm').value;

            if (password !== confirmPassword) {
                alert("Konfirmasi password tidak sesuai!");
                event.preventDefault();
            }
        });
    </script>
</body>
</html>



