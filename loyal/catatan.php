<!-- ringkasan pemasukan -->

<?php
                                include "koneksidb.php";

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
                            <p> Rp. <?php echo $total_income; ?> </p>


<!-- ringkasan pengeluaran -->

<?php
                                include "koneksidb.php";

                                // Query to calculate the total income
                                $sum_expenses_query = "SELECT FORMAT(SUM(nominal), 0) AS total_expenses FROM expenses;";
                                $result = mysqli_query($conn, $sum_expenses_query);

                                // Check if the query was successful
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $total_expenses = $row['total_expenses'];
                                } else {
                                    // Handle the error if the query fails
                                    $total_expenses = "Error fetching total expenses";
                                }

                                // Don't need to execute another query here: mysqli_query($conn, $sum_expanses);
                            ?>
                            <p> Rp. <?php echo $total_expenses; ?> </p>

                            

<!-- untuk mengurutkan data pengeluuaran dari tanggal terakhir -->

<?php $sql = "SELECT * FROM expenses order by tanggal desc";

?>

<!-- untuk mengurutkan data pemasukan dari tanggal terakhir -->
$sql = "SELECT * FROM income order by tanggal desc";


    <?php

        $total_on = "SELECT Kategori, FORMAT(SUM(nominal),0) AS totalOn FROM expenses GROUP BY kategori;";

        // select kategori, MAX(SUM(nominal) AS top_expense GROUP BY kategori FROM expenses;
        $result = mysqli_query($conn, $total_on);

        $row = mysqli_fetch_assoc($result);

        $totalnow = $row['totalOn'];

    ?>

    <h3>Total Makan :</h3>
    <p> Rp. <?php echo $totalnow ; ?></p>

