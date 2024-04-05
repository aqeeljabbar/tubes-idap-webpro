<?php

include("koneksidb.php");

// Query untuk mengambil data dari database
$sql = "SELECT * FROM expenses";
$result = mysqli_query($conn, $sql);
?>

<table class="table">

    <tbody>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $nominal = $row['nominal'];
        $kategori = $row['kategori'];
        $metode = $row['metode'];
        $tanggal = $row['tanggal'];
        $keterangan = $row['keterangan']; 


        if ($kategori=="Makan"){
            $icon = '<img src="asset/cat-meal.svg">';
        }

        elseif ($kategori=="Hiburan"){
            $icon = '<img src="asset/cat-hiburan".svg">';
        }

        elseif ($kategori=="Fashion"){
            $icon = '<img src="asset/cat-fashion".svg">';
        }


    ?>



    <tr>
        <td rowspan="2"><<?php echo $icon; ?>></td>
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

    </tbody>
</table>

<?php
}
?>

?>
