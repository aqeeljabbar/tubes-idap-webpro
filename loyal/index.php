<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyal | Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style-dashboard.css">
     
    <!-- font installation -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    
    <?php 
    session_start() ;

    
    // sebelumua 'login'
    if ( !isset($_SESSION['logged_in']) ) {
        header("Location: login.php");
        exit;
    }

    include("navbar.php"); 


    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Ringkasan</h4>
                </div>
                <div class="card-body" style="display: flex;">
            
                <div>
                    <div id="pemasukan">
                        <div id="pemasukan-img">
                            <img src="asset/income-main.svg"> 
                        </div>
                        
                        <div id="pemasukan-text">
                            <h4>Pemasukan</h4>
                            <p>Rp. 3.000.000</p>
                        </div> 
                    </div>
                    

                    <div id="pengeluaran">
                        <div id="pemasukan-text">
                            <img src="asset/expanse-main.svg">
                        </div>

                        <div id="pengeluaran-text">
                            <h4>Pengeluaran</h4>
                            <p>Rp. 3.000.000</p>
                        
                            <!-- <?php 
                            include "koneksidb.php";
                            $sum_expanse = "SELECT FORMAT(SUM(nominal),0) AS total_income FROM income;";
                            
                            $sum_expanses = $row['total_income'];
                            mysqli_query($conn, $sum_expanses);
                            ?> -->


                            

                            <p> Rp. <?php echo $sum_expanses;?> </p>
                        </div> 

                    </div>
                </div>
                    
                    <!-- <p>Total Income: Rp. 3.000.000 </p> -->

                    

                    <!-- <p>Total Expenses: Rp. 1.500.000 </p>
                    <p>Remaining Balance: Rp. 1.500.000 </p> -->
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
