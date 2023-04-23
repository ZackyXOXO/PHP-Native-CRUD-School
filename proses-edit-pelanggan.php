<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan

$nama = $_POST['nama'];
$member = $_POST['member'];
$alamat = $_POST['alamat'];
$id = $_POST['id'];
//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan

{ //query simpan ke db
	$sql="UPDATE tb_cust SET nama='$nama', member='$member', alamat='$alamat' WHERE id_cust='$id'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));


		?>
		<script language="javascript">
			alert('Data Berhasil Disimpan');
			document.location.href="lihat-pelanggan.php";
		</script>
		<?php
}?> <!--tutup php--->
