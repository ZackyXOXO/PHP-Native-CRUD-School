<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Edit Data Stock</title>
</head>

<body>
<?php
    include 'koneksi.php';

    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    $sql = "SELECT * FROM tb_boba WHERE id_barang='$id'";
    $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex flex-row mb-3">
        <a class="btn btn-success "href="tambah-stock.php">Isi Data Stock</a>
        <a class="btn btn-success" href="lihat-stock.php">Lihat Data Stock</a>
        <a class="btn btn-success" href="isi-pelanggan.php">Isi Data Pelanggan</a>
        <a class="btn btn-success" href="lihat-pelanggan.php">Lihat Data Pelanggan</a>
    </nav>
    <div class="container">

        <h1 align=center>Edit Data Stock</h1>
        <form action="proses-edit-stock.php" method="POST">
            <table class="table table-striped " align="center" border="1">
                <tr>
                    <td>Id</td>
                    <td>:</td>
                    <td><input type="text" name=id value="<?php echo $row['id_barang'];?>" readonly></td>
                </tr>
                <tr>
                    <td>Item</td>
                    <td>:</td>
                    <td><input type="text" name=item class="input-group  mb-3" placeholder="Item" value="<?php echo $row['item'];?>"></td>
                </tr>
                <tr>
                    <td>Merk</td>
                    <td>:</td>
                    <td><select name="merk" class="form-select mb-3">
                            <option value="Fremit">Fremilt</option>
                            <option value="Chatime">Chatime</option>
                            <option value="Janji Jiwa">Janji Jiwa</option>
                            <option value="DumDum">DumDum</option>
                            <option value="Oasis">Oasis</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Stock</td>
                    <td>:</td>
                    <td><input type="text" name=pack class="input-group mb-3" value="<?php echo $row['pack'];?>"></td>
                </tr>
                <tr>
                    <td>Isi Kemasan</td>
                    <td>:</td>
                    <td><input type="text" name=qty class="input-group mb-3" value="<?php echo $row['qty'];?>"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name=kirim value="Simpan" class="btn btn-danger"></button>
                        <a class="btn btn-warning" href="lihat-stock.php">Batal</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>