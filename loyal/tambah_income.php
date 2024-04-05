<?php

session_start() ;

if ( !isset($_SESSION['logged_in']) ) {
    header("Location: login.php");
    exit;
}

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
    <title>Loyal | Income Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include("navbar.php"); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <!-- <h4 class="mb-0">Catat Pengeluaran</h4> -->

                        <h4 class="mb-0">Catat Pemasukan</h4>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambahincome.php" method="post">
                            <div class="mb-3">
                                <label for="nominal">Nominal</label>
                                <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukan Nominal Dalam Rupiah" required>
                            </div>
                            <div class="mb-3">
                                <label for="kategori">Kategori</label>
                                <!-- <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Enter the category" required> -->

                                <select class="form-control" name="kategori" id="kategori"> <br>
                                    <!-- <option value="Fashion">
                                        Fashion
                                        <img src="asset/cat-fashion.svg">
                                    </option> -->

                                    <option value="Gaji">Gaji</option>
                                    <option value="Bonus/THR">Bonus/THR</option>
                                    <option value="Hadiah">Hadiah</option>
                                    <option value="Dividend">Dividend</option>
                                    <option value="Hasil Usaha">Hasil Usaha</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="metode">Metode</label>
                                <!-- <input type="text" class="form-control" id="metode" name="metode" placeholder="Enter the method" required> -->

                                <select class="form-control" name="metode" id="metode"> <br>
                                    <!-- <option value="Fashion">
                                        Cash
                                        <img src="asset/cat-fashion.svg">
                                    </option> -->
                                    
                                    <option value="Transfer">Transfer</option>
                                    <option value="Tunai">Tunai</option>
                                    <!-- <option value="Fashion">QRIS</option> -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Tulis Keterangan Tambahan Misal : Bonus Tahunan 2022"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width : 100%;">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
