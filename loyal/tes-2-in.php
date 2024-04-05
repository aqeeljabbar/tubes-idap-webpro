
<?php
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
    <title>Loyal | Income Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btn-danger {
            background-color: #FC5C65 !important;
            color: #fff !important;
            border: none !important;
        }

        .btn-primary {
            background-color: #418CFD !important;
            color: #fff !important;
            border: none !important;
        }
    </style>
</head>
<body>
<?php include("navbar.php"); ?>

    <div class="container mt-5">
    <a href="tambah_expense.php" class="btn btn-primary mb-3">Add Expenses</a>

        <table class="table">
            <!-- <thead>
                <tr>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Metode</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead> -->
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $nominal = $row['nominal'];
                    $kategori = $row['kategori'];
                    $metode = $row['metode'];
                    $tanggal = $row['tanggal'];
                    $keterangan = $row['keterangan'];

                    ?>

                    <?php if ($kategori=='Gaji'):?>
                        <tr>
                        <td rowspan="2"><img src="asset/cat-salary.svg"></td>
                        <td rowspan="2"></td>
                        <th>Rp. <?php echo number_format($nominal); ?></th>
                        <td rowspan="2">
                            <img src="asset/expense-scd.svg">
                        </td>
    
                        <td rowspan="2">
                            <a href="edit_expense.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                        </td>
    
                        <td rowspan="2">
                            <a href="hapus_expense.php?id=<?php echo $id; ?>" class="btn btn-danger ml-2" onclick="showDeleteConfirmation('<?php echo $id; ?>')">Hapus</a>
                        </td>
                        
                        <td rowspan="2">
                            <a href="lihat_detailexpense.php?id=<?php echo $id; ?>" class="text-decoration-none text-primary ml-2">Detail</a>
                        </td>
    
                    </tr>
                    
                    <tr>
                        <td><?php echo $keterangan; ?></td>
                    </tr>

                    <?php elseif($kategori=='Hadiah'): ?>
                        <tr>
                        <td rowspan="2"><img src="asset/cat-gift.svg"></td>
                        <td rowspan="2"></td>
                        <th>Rp. <?php echo number_format($nominal); ?></th>
                        <td rowspan="2">
                            <img src="asset/expense-scd.svg">
                        </td>
    
                        <td rowspan="2">
                            <a href="edit_expense.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                        </td>
    
                        <td rowspan="2">
                            <a href="hapus_expense.php?id=<?php echo $id; ?>" class="btn btn-danger ml-2" onclick="showDeleteConfirmation('<?php echo $id; ?>')">Hapus</a>
                        </td>
                        
                        <td rowspan="2">
                            <a href="lihat_detailexpense.php?id=<?php echo $id; ?>" class="text-decoration-none text-primary ml-2">Detail</a>
                        </td>
    
                    </tr>
                    
                    <tr>
                        <td><?php echo $keterangan; ?></td>
                    </tr>


                    <?php elseif($kategori=='Bonus/THR'): ?>
                        <tr>
                        <td rowspan="2"><img src="asset/cat-bonus.svg"></td>
                        <td rowspan="2"></td>
                        <th>Rp. <?php echo number_format($nominal); ?></th>
                        <td rowspan="2">
                            <img src="asset/expense-scd.svg">
                        </td>
    
                        <td rowspan="2">
                            <a href="edit_expense.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                        </td>
    
                        <td rowspan="2">
                            <a href="hapus_expense.php?id=<?php echo $id; ?>" class="btn btn-danger ml-2" onclick="showDeleteConfirmation('<?php echo $id; ?>')">Hapus</a>
                        </td>
                        
                        <td rowspan="2">
                            <a href="lihat_detailexpense.php?id=<?php echo $id; ?>" class="text-decoration-none text-primary ml-2">Detail</a>
                        </td>
    
                    </tr>
                    
                    <tr>
                        <td><?php echo $keterangan; ?></td>
                    </tr>


                    <?php elseif($kategori=='Dividend'): ?>
                        <tr>
                        <td rowspan="2"><img src="asset/cat-dividen.svg"></td>
                        <td rowspan="2"></td>
                        <th>Rp. <?php echo number_format($nominal); ?></th>
                        <td rowspan="2">
                            <img src="asset/expense-scd.svg">
                        </td>
    
                        <td rowspan="2">
                            <a href="edit_expense.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                        </td>
    
                        <td rowspan="2">
                            <a href="hapus_expense.php?id=<?php echo $id; ?>" class="btn btn-danger ml-2" onclick="showDeleteConfirmation('<?php echo $id; ?>')">Hapus</a>
                        </td>
                        
                        <td rowspan="2">
                            <a href="lihat_detailexpense.php?id=<?php echo $id; ?>" class="text-decoration-none text-primary ml-2">Detail</a>
                        </td>
    
                    </tr>
                    
                    <tr>
                        <td><?php echo $keterangan; ?></td>
                    </tr>


                    <?php else: ?> 
                        <tr>
                    <td rowspan="2"><img src="asset/cat-fashion.svg"></td>
                    <td rowspan="2"></td>
                    <th>Rp. <?php echo number_format($nominal); ?></th>
                    <td rowspan="2">
                        <img src="asset/expense-scd.svg">
                    </td>

                    <td rowspan="2">
                        <a href="edit_expense.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a>
                    </td>

                    <td rowspan="2">
                        <a href="hapus_expense.php?id=<?php echo $id; ?>" class="btn btn-danger ml-2" onclick="showDeleteConfirmation('<?php echo $id; ?>')">Hapus</a>
                    </td>
                    
                    <td rowspan="2">
                        <a href="lihat_detailexpense.php?id=<?php echo $id; ?>" class="text-decoration-none text-primary ml-2">Detail</a>
                    </td>

                </tr>
                
                <tr>
                    <td><?php echo $keterangan; ?></td>
                </tr>
                    
                <?php endif;?>
                <?php }?>

            </tbody>
        </table>
    </div>
</body>
</html>