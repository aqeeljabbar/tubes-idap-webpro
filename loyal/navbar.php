<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal | Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style-navbar.css">
     
     <!-- font installation -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">

     

     <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .btn-primary {
            background-color: #418CFD !important;
            color: #fff !important;
            border: none !important;
        }

        .navbar {
            background-color: #fff;
        }

        .nav-item .nav-link,
        .nav-item .btn {
            margin: 20px;
        }

        .nav-item .dropdown-item {
            margin-left:24px;
            margin-right:24px;
        }

     </style>
</head>
<body>


<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">
            <img src="asset/brand-logo.svg">
        </span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <!-- <a class="nav-link" href="dashboard.php">Home</a> -->

                    <a class="nav-link" href="index.php">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="set_budget.php">Atur Anggaran</a>
                </li>


                <!-- <li class="nav-item">
                    <a class="nav-link" href="income.php">History</a>

                    <a class="nav-link" href="#">Riwayat</a>

                </li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Riwayat</a>
                    <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="income.php">Riwayat Pemasukan</a></li>

                            <li><a class="dropdown-item" href="expense.php">Riwayat Pengeluaran</a></li>
                    </ul>
                </li>
                

                
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Create</a> -->

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">Buat</a>

                    <ul class="dropdown-menu">
                        <!-- <li><a class="dropdown-item" href="income.php">Pemasukkan</a></li> -->

                        <li><a class="dropdown-item" href="tambah_income.php">Pemasukan</a></li>
                        <!-- <li><a class="dropdown-item" href="income.php">Pengeluaran</a></li> -->

                        <!-- <li><a class="dropdown-item" href="pengeluaran/tambah_expense.php">Pengeluaran</a></li> -->

                        <li><a class="dropdown-item" href="tambah_expense.php">Pengeluaran</a></li>

                    </ul>
                </li>

                
                <li class="nav-item">
                    <!-- <button class="btn btn-primary" >Logout</button> -->

                    <a class="btn btn-primary" href="logout.php">Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




</body>
</html>
