<!-- Proses simpan ke database  -->

<?php 
    include("koneksidb.php");

    // if (isset($_POST['tambah'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kategori_budget = mysqli_real_escape_string($conn, $_POST['kategori']);
        $limit = mysqli_real_escape_string($conn, $_POST['limit']);
        $bulan = mysqli_real_escape_string($conn, $_POST['bulan']);


        $sql = "INSERT INTO atur_budget (kategori_budget, limit_budget) VALUES ('$kategori_budget', '$limit')";

        if (mysqli_query($conn, $sql)) {
            // Jika berhasil ditambahkan, redirect kembali ke halaman daftar proyek
            header("Location: set_budget.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
?>