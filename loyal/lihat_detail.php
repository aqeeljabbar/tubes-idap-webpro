<?php
include("koneksidb.php");

// Cek apakah ada parameter ID yang dikirimkan melalui URL
if (isset($_GET['id'])) {
    // Ambil ID dari URL
    $id = $_GET['id'];

    // Query untuk mengambil data proyek berdasarkan ID
    $sql = "SELECT * FROM income WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // Cek apakah data proyek dengan ID tersebut ada di database
    if (mysqli_num_rows($result) > 0) {
        // Ambil data proyek dari hasil query
        $row = mysqli_fetch_assoc($result);
        $nominal = $row['nominal'];
        $kategori = $row['kategori'];
        $metode = $row['metode'];
        $tanggal = $row['tanggal'];
        $keterangan = $row['keterangan'];
    } else {
        // Jika tidak ada data proyek dengan ID tersebut, tampilkan pesan error
        echo "Proyek tidak ditemukan.";
        exit();
    }
} else {
    // Jika tidak ada parameter ID yang dikirimkan, tampilkan pesan error
    echo "ID Proyek tidak ditemukan.";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Detail Pengeluaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link href="style.css" rel="stylesheet" /> -->
</head>
<body>
    <main>
        <!-- Navigation-->
        <?php include("navbar.php"); ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h5>Nominal: <?php echo $nominal; ?></h5>
                    <h5>Kategori: <?php echo $kategori; ?></h5>
                    <h5>Metode: <?php echo $metode; ?></h5>
                    <p>Tanggal: <small class="text-muted"><?php echo $tanggal; ?></small></p>
                    <p>Keterangan: <?php echo $keterangan; ?></p>
                </div>
            </div>
        </div>

    </main>
</body>
</html>
