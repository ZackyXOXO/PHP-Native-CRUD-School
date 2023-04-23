<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Isi Data Stock</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex flex-row mb-3">
        <a class="btn btn-success " href="tambah-stock.php">Isi Data Stock</a>
        <a class="btn btn-success" href="lihat-stock.php">Lihat Data Stock</a>
        <a class="btn btn-success" href="isi-pelanggan.php">Isi Data Pelanggan</a>
        <a class="btn btn-success" href="lihat-pelanggan.php">Lihat Data Pelanggan</a>
    </nav>
    <div class="container">
        <h1 align=center>Isi Data Stock</h1>
        <a class="btn btn-dark mb-2" href="lihat-stock.php">Kembali Lihat Data</a>
        <form action="isi-data-proses.php" method="POST">
            <table class="table table-striped " align="center" border="1">
                <tr>
                    <td>Item</td>
                    <td>:</td>
                    <td><input type="text" name=item class="input-group  mb-3" placeholder="Item"></td>
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
                    <td><input type="text" name=pack class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td>Isi Kemasan</td>
                    <td>:</td>
                    <td><input type="text" name=qty class="input-group mb-3"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name=kirim class="btn btn-danger"></button>
                        <input type="reset" name=reset class="btn btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>