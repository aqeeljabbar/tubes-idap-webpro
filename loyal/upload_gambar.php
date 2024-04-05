<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_upload" method="post"
    enctype="multipart/form-data">

    <input type="file" name="filekirim" id="">
    <input type="submit" value="kirim">
    </form>
</body>
</html>

<!-- proses upload -->
<?php
    require_once "koneksidb.php";

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileprinter"]['tmp_name'], $target_file);

    $sql = "INSERT INTO nama_tabel(namakolom,)
    VALUES ('$target_file')


?>