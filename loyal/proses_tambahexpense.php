<?php
include("koneksidb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nominal = $_POST['nominal'];
    $kategori = $_POST['kategori'];
    $metode = $_POST['metode'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

  // Query untuk menambahkan proyek ke database
  $sql = "INSERT INTO expenses (nominal, kategori, metode, tanggal, keterangan) VALUES ('$nominal', '$kategori', '$metode', '$tanggal', '$keterangan')";

  if (mysqli_query($conn, $sql)) {
    // Jika berhasil ditambahkan, redirect kembali ke halaman daftar proyek
    header("Location: expense.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
