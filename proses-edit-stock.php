<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan
$id				= $_POST['id'];
$item	= $_POST['item'];
$merk			= $_POST['merk'];
$stock			= $_POST['pack'];
$isikemasan	= $_POST['qty'];

$isi = $stock * $isikemasan;

if ($isi < 10) {
	$status = "Kurang";
} elseif ($isi == 10) {
	$status = "Cukup";
} elseif ($isi >= 10 && 20) {
	$status = "OK";
} else {
	echo "Isi Tidak Ada/Kosong";
}
//sesuaikan dengan kebutuhan


//input ke tabel db

{ //query simpan ke db
	$sql="UPDATE tb_boba SET item='$item', merk='$merk', pack='$stock', qty='$isikemasan', isi='$isi', status='$status' WHERE id_barang='$id'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));

		?>
		<script language="javascript">
			alert('Data Berhasil Disimpan');
			document.location.href="lihat-stock.php";
		</script>
		<?php
}?> <!--tutup php--->
