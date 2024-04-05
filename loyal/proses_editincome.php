<?php
include("koneksidb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nominal = $_POST['nominal'];
    $kategori = $_POST['kategori'];
    $metode = $_POST['metode'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

  // Query untuk mengupdate proyek di database berdasarkan ID
  $sql = "UPDATE income SET nominal='$nominal', kategori='$kategori', metode='$metode', tanggal='$tanggal', keterangan='$keterangan' WHERE id=$id";

  if (mysqli_query($conn, $sql)) {
    // Jika berhasil diupdate, redirect kembali ke halaman daftar proyek
    // header("Location: dashboard.php");

    header("Location: income.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
