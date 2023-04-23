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
    <title>Edit Data Pelanggan</title>
</head>

<body>
    <?php
    include 'koneksi.php';

    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $sql = "SELECT * FROM tb_cust WHERE id_cust='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
    }
    ?>

    <div class="container">
        <h1 align=center>Edit Data Pelanggan</h1>
        <form action="proses-edit-pelanggan.php" method="POST">
            <table align="center" class="table table-striped ">
                <tr>
                    <td>Id</td>
                    <td>:</td>
                    <td><input type="text" name="id" value="<?php echo $row['id_cust']?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Costumer</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $row['nama']?>"></td>
                </tr>
                <tr>
                    <td>Member</td>
                    <td>:</td>
                    <td><input class="form-check-input mt" type="radio" name="member" value="Ya" <?php if($row['member']=="Ya"){echo "checked";}?>>Ya
                        <input class="form-check-input mt" type="radio" name="member" value="Tidak" <?php if($row['member']=="Tidak"){echo "checked";}?>>Tidak
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"></td>
                </tr>
                <tr>
                    <td colspan="3"><input class="btn btn-success" type="submit" name=kirim>
                        <a class="btn btn-danger" href="lihat-pelanggan.php">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>