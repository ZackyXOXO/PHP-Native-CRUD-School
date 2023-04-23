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
    <title>Isi Data Pelanggan</title>
</head>

<body>
    <div class="container">
        <h1 align=center>Isi Data Pelanggan</h1>
        <a class="btn btn-primary mb-2" href="lihat-pelanggan.php">Kembali Lihat Data</a>
        <form action="proses-pelanggan.php" method="POST">
            <table align="center" class="table table-striped ">
                <tr>
                    <td>Nama Costumer</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Member</td>
                    <td>:</td>
                    <td><input class="form-check-input mt" type="radio" name="member" value="Ya">Ya
                        <input class="form-check-input mt" type="radio" name="member" value="Tidak">Tidak
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td colspan="3"><input class="btn btn-success" type="submit" name=kirim>
                        <input class="btn btn-danger" type="reset" name=reset>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>