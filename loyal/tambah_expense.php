<?php

session_start() ;

if ( !isset($_SESSION['logged_in']) ) {
    header("Location: login.php");
    exit;
}

include("koneksidb.php");


// Query untuk mengambil data dari database
$sql = "SELECT * FROM expenses";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal | Expenses Form</title>

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
                        <!-- <h4 class="mb-0">Expenses Form</h4> -->

                        <h4 class="mb-0">Catat Pengeluaran</h4>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambahexpense.php" method="post">
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

                                    <option value="Makan">Makan</option>
                                    <option value="Pakaian">Pakaian</option>
                                    <option value="Investasi">Investasi</option>
                                    <option value="Asuransi/Kesehatan">Asuransi/Kesehatan</option>
                                    <option value="Hiburan">Hiburan</option>
                                    <option value="Listrik">Listrik</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Keperluan Rumah">Keperluan Rumah</option>
                                    <option value="Transportasi">Transportasi</option>

                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="metode">Metode</label>
                                <!-- <input type="text" class="form-control" id="metode" name="metode" placeholder="Enter the method" required> -->

                                <select class="form-control" name="metode" id="metode"> <br>
                                    
                                    <option value="Tunai">Tunai</option>
                                    <option value="Transfer">Transfer</option>
                                    <option value="Transfer">QRIS</option>
                                    <option value="Transfer">Debit</option>
                                    
                                    <!-- <option value="Fashion">QRIS</option> -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Tulis Keterangan Tambahan Misal : Matcha Milk Tea"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width : 100%;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
