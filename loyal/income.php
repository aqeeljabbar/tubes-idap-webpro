<?php
include("koneksidb.php");

// Query untuk mengambil data dari database
$sql = "SELECT * FROM income";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal | Income Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        /* .mb-0 {
            font-weight: 400;
        } */

        .btn-danger {
            background-color: #FC5C65 !important;
            color: #fff !important;
            border: none !important;
        }

        .btn-primary {
            background-color: #418CFD !important;
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

include("navbar.php"); 
?>

    <div class="container mt-5">
    <a href="tambah_income.php" class="btn btn-primary mb-3">Add Income</a>

        <div class="row">
            <?php
            // Assuming $result contains the fetched data
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $nominal = $row['nominal'];
                $kategori = $row['kategori'];
                $metode = $row['metode'];
                $tanggal = $row['tanggal'];
                $keterangan = $row['keterangan'];
            ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="icon" style="display: flex; gap:0 12px; margin:0 auto; align-item:center;"   >
                            
                            <img src="asset/income-main.svg" width= "32px";>
                            <h5 class="mb-0" style="margin-top: auto font-weight: 400;"><?php echo $kategori; ?></h5>

                        </div>

                        <!-- <h5 class="mb-0"><?php echo $kategori; ?></h5> -->

                       
                    </div>
                    <div class="card-body">
                        <!-- <p class="card-text">Nominal: Rp. <?php echo number_format($nominal); ?></p> -->

                        <!-- <p class="card-text"> Rp. <?php echo number_format($nominal); ?></p>
                        <p class="card-text">Metode: <?php echo $metode; ?></p>
                        <p class="card-date">Tanggal: <?php echo $tanggal; ?></p>
                        <p class="card-text">Keterangan: <?php echo $keterangan; ?></p> -->

                        <h5 class="card-text">Rp. <?php echo number_format($nominal); ?></h5>
                        <!-- <p class="card-text"><?php echo $metode; ?></p>
                        <p class="card-date"><?php echo $tanggal; ?></p> -->
                        <p class="card-text"><?php echo $keterangan; ?></p>

                        <div>
                            <div style="margin: 8px 2px;">
                                <a href="lihat_detail.php?id=<?php echo $id; ?>" class="text-decoration-none text-primary" >Detail</a>
                            </div>
                            
                            <a href="edit_income.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                            <a href="hapus_income.php?id=<?php echo $id; ?>" class="btn btn-danger ml-2" onclick="showDeleteConfirmation('<?php echo $id; ?>')">Hapus</a>
                        </div>


                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
