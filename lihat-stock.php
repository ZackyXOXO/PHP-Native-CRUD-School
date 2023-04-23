<html lang="en">

<head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex flex-row mb-3">
        <a class="btn btn-success " href="tambah-stock.php">Isi Data Stock</a>
        <a class="btn btn-success" href="lihat-stock.php">Lihat Data Stock</a>
        <a class="btn btn-success" href="isi-pelanggan.php">Isi Data Pelanggan</a>
        <a class="btn btn-success" href="lihat-pelanggan.php">Lihat Data Pelanggan</a>
    </nav>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Lihat Stock </title>
</head>

<body>
    <div class="container">
        <h1 align=center>Lihat Isi Stock</h1>
        <a class="btn btn-primary mb-2" href="tambah-stock.php">+ Tambah Data</a>
        <table border="1" cellspacing="0" align="center" class="table table-sm">
            <tr>
                <th>Item</th>
                <th>Merk</th>
                <th>Pack</th>
                <th>Quantity</th>
                <th>Isi</th>
                <th>Kemasan</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php
                include 'koneksi.php';

                $result = mysqli_query($koneksi, "SELECT * FROM tb_boba");
                while ($row = mysqli_fetch_assoc($result)) {

                ?>
            <tr>
                <td><?php echo $row['item']; ?></td>
                <td><?php echo $row['merk']; ?></td>
                <td><?php echo $row['pack']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                <td><?php echo $row['isi']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <a class="btn btn-warning" href="edit-stock.php?id=<?php echo $row['id_barang'];?>">EDIT</a>
                    <a class="btn btn-danger" href="hapus-stock.php?id=<?php echo $row['id_barang']; ?>">HAPUS</a>
                </td>

            </tr>
        <?php } ?>
        </table>
    </div>
</body>

</html>