<?php
include("koneksidb.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Query untuk mengambil data income berdasarkan ID
  $sql = "SELECT * FROM atur_budget WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Budget | Loyal : Web Finansial Personal</title>
</head>
<body>

    <?php include("navbar.php"); ?>

    <div class="container">
        <h2>Ubah Limit Pengeluaranmu</h2>

        <form action="proses_edit-budget.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label for="nominal">Limit</label>
                <input type="text" class="form-control" id="nominal" name="limit_budget" value="<?php echo $row['limit_budget']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" >Simpan</button>
        </form>
    </div>
</body>
</html>