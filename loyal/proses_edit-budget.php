<?php

include("koneksidb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $limit = mysqli_real_escape_string($conn, $_POST['limit_budget']);
    $bulan = mysqli_real_escape_string($conn, $_POST['bulan']);

    $sql = "UPDATE atur_budget SET limit_budget='$limit' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        // Jika berhasil ditambahkan, redirect kembali ke halaman daftar proyek
    header("Location: set_budget.php");
    exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
