<?php
require'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM mercle");

$mercle = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mercle[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Data Barang</title>
    <style>
    </style>
</head>
<body>
    <center>
    <h1>Data Barang Mercle Devices</h1>
    <table border=5px>
        <tr>
            <th><b>ID</b></th>
            <th><b>Nama</b></th>
            <th><b>Brand</b></th>
            <th><b>Years</b></th>
            <th><b>Color</b></th>
            <th><b>Price</b></th>
            <th><b>Opsi</b></th>
        </tr>
        <?php $i = 1; foreach ($mercle as $mc):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $mc["nama"] ;?></td>
            <td><?php echo $mc["brand"] ;?></td>
            <td><?php echo $mc["year"] ;?></td>
            <td><?php echo $mc["color"];?></td>
            <td><?php echo $mc["price"];?></td>
            <td><a href="edit.php?id=<?php echo $mc["id"]; ?>" >Edit</a> 
            | <a href="hapus.php?id=<?php echo $mc["id"]; ?>" onclick = "return confirm('Anda yakin ingin menghapus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
        <tr>
            <td colspan="6"><button width="100px"><a href="tambah.php" style="color: black  ">Tambah Data</a></button></td>
        </tr>
    </table>
    </center>
</body>
</html>