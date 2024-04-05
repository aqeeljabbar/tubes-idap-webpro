<?php
include("koneksidb.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Query untuk mengambil data income berdasarkan ID
  $sql = "SELECT * FROM income WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
}

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

    <div class="container">
        <h2>Ubah Catatan</h2>
        <form action="proses_editincome.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="nominal">Nominal</label>
                <input type="text" class="form-control" id="nominal" name="nominal" value="<?php echo $row['nominal']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $row['kategori']; ?>" required>
            </div>
            <div class="form-group">
                <label for="metode">Metode:</label>
                <input type="text" class="form-control" id="metode" name="metode" value="<?php echo $row['metode']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $row['tanggal']; ?>" required>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="4" required><?php echo $row['keterangan']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" >Simpan</button>

            <!-- <a href="income.php">Simpan</a> -->
            
        </form>
    </div>
</body>
</html>
