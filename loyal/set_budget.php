<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atur </title>

    <!-- sync bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font installation -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        h2 {
            font-weight:400;
            font-size: 28px;
        }

        .btn-primary {
            background-color: #418CFD !important;
            color: #fff !important;
            border: none !important;
        }

        .btn-danger {
            background-color: #FC5C65 !important;
            color: #fff !important;
            border: none !important;
        }
    </style>

</head>
<body>

    <?php 

    session_start() ;

    if ( !isset($_SESSION['logged_in']) ) {
        header("Location: login.php");
        exit;
    }
    
    include ("navbar.php"); 
    ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Atur Anggaran Pengeluaranmu</h2>

        <form id="formTambahAnggaran" class="mb-4" action="proses_tambah-budget.php" method="post">
        <div class="row">
            <div class="col-md-3">
                <!-- Dropdown menu untuk kategori -->
                <select class="form-select" id="kategori" name="kategori" required>

                    <option selected disabled>Pilih Kategori</option>
                    <option value="Makanan">Makan</option>
                    <option value="Pakaian">Pakaian</option>
                    <option value="Investasi">Investasi</option>
                    <option value="Asuransi/Kesehatan">Asuransi/Kesehatan</option>
                    <option value="Hiburan">Hiburan</option>
                    <option value="Listrik">Listrik</option>
                    <option value="Internet">Internet</option>
                    <option value="Kebutuhan Rumah">Kebutuhan Rumah</option>
                    <option value="Transportasi">Transportasi</option>

                </select>
            </div>

           

            <div class="col-md-3">
                <input type="number" class="form-control" placeholder="Tentukan Batas Limit Pengeluaranmu Dalam Kurs Rupiah" id="limit" name="limit" required>
            </div>

            <div class="col-md-3">
                <input type="date" class="form-control" placeholder="Tanggal" name="bulan" id="tanggal" required>
            </div>

            <!-- <div class="col-md-3">
                <input type="date" class="form-control" placeholder="Tanggal" id="tanggal" required>
            </div> -->

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
            </div>
        </div>
    </form>
    </div>

    <?php 
    include("koneksidb.php");

    // Query untuk mengambil data dari database
    $sql = "SELECT * FROM atur_budget";

    // $total_kat = "SELECT FORMAT(SUM(nominal),0) AS total_kategori FROM expenses where kategori = '$kategori';";
    $result = mysqli_query($conn, $sql);
    
    ?>

    <div class="row">
        <?php
        // Assuming $result contains the fetched data
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $kategori_budget = $row['kategori_budget'];
            $limit_budget = $row['limit_budget'];
            // $total_kategori = $row['total_kategori'];
        
        ?>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0" style="margin-top: auto font-weight: 400;"><?php echo $kategori_budget; ?></h5>
                </div>

                <div class="card-body">
                    <h6>Limit Anggaranmu</h6>
                    <p class="card-text"> Rp. <?php echo number_format($limit_budget); ?></p>

                    <!-- <h6>Pengeluaran yang sedang berjalan</h6>
                    <p class="card-text"> Rp. <?php echo number_format($total_kategori); ?></p> -->

                    <div>
                        <div style="margin: 8px 2px;">
                            <!-- <a href="lihat_detail.php?id=<?php echo $id; ?>" class="text-decoration-none text-primary" >Detail</a> -->
                        </div>
                            
                        <a href="edit_budget.php?id=<?php echo $id; ?>" class="btn btn-primary">Ubah</a>
                        <a href="hapus_budget.php?id=<?php echo $id; ?>" class="btn btn-danger ml-2" onclick="showDeleteConfirmation('<?php echo $id; ?>')">Hapus</a>
                    </div>
                
                </div>

            </div>
        </div> 

        <?php
        }
        ?>


    



</body>
</html>