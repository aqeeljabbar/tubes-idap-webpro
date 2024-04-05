<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'koneksidb.php';

        // Query to calculate the total income
        $sum_income_query = "SELECT FORMAT(SUM(nominal), 0) AS total_income FROM income;";
        $result = mysqli_query($conn, $sum_income_query);

        // Check if the query was successful
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $total_income = $row['total_income'];
        } else {
        // Handle the error if the query fails
        $total_income = "Error fetching total income";
        }

        // Don't need to execute another query here: mysqli_query($conn, $sum_expanses);
    ?>
    <h3>pemasukan</h3>
    <p> Rp. <?php echo $total_income; ?> </p>


    <!-- Pengeluaran -->
    <?php

        // membuat query
        $sum_expanse_query = "SELECT FORMAT(SUM(nominal),0) AS total_expense FROM expenses;";

        // menghubungkan koneksi
        $result_expense = mysqli_query($conn, $sum_expanse_query);


        $show_expense_result = mysqli_fetch_assoc($result_expense);

        $total_expense = $show_expense_result['total_expense']

    ?> 

    <h3>Pengeluaran</h3>
    <span> Rp. <?php echo $total_expense; ?></span>
    

    <!-- Kategori pengluaran terbesar -->

    <?php
        $sum_makan = " SELECT FORMAT(SUM(nominal),0) AS total_makan FROM expenses where kategori = 'makan';";

        $result = mysqli_query($conn, $sum_makan);

        $row = mysqli_fetch_assoc($result);

        $total_makan = $row['total_makan'];
    ?>

    <h3>Total Makan :</h3>
    <p> Rp. <?php echo $total_makan; ?></p>


    <!-- Kategori terbesar -->

    <?php
        $kategori_terbesar = " SELECT MAX(SUM(nominal) AS top_expense GROUP BY kategori FROM expenses;";

        // select kategori, MAX(SUM(nominal) AS top_expense GROUP BY kategori FROM expenses;
        $result = mysqli_query($conn, $kategori_terbesar);

        $row = mysqli_fetch_assoc($result);

        $top_expense = $row['top_expense'];

    ?>

    <h3>Total Makan :</h3>
    <p> Rp. <?php echo $top_expense ; ?></p>


    <!-- menghitung total pengeluaran on going -->

    <?php
    // $kategori = 

    // $sql = "SELECT * FROM expenses";
    // $result = mysqli_query($conn, $sql);

    // while ($row = mysqli_fetch_assoc($result)) {
    //     $id = $row['id'];
    //     $nominal = $row['nominal'];
    //     $kategori = $row['kategori'];
    //     $metode = $row['metode'];
    //     $tanggal = $row['tanggal'];
    //     $keterangan = $row['keterangan'];
    // }

    $total_on = " SELECT Kategori, FORMAT(SUM(nominal),0) AS totalon GROUP BY kategori FROM expenses;";

    // select kategori, MAX(SUM(nominal) AS top_expense GROUP BY kategori FROM expenses;
    $result = mysqli_query($conn, $total_on);

    $row = mysqli_fetch_assoc($result);

    $totalnow = $row['totalon'];

    ?>

    <h3>Total Makan :</h3>
    <p> Rp. <?php echo $totalnow ; ?></p>




</body>
</html>