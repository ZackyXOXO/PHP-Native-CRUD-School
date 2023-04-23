<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan

$nama = $_POST['nama'];
$member = $_POST['member'];
$alamat = $_POST['alamat'];

//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan

{ //query simpan ke db
	$sql="INSERT INTO tb_cust VALUES ('','$nama','$member','$alamat')";
	$query = mysqli_query($koneksi, $sql);

		?>
		<script language="javascript">
			alert('Data Berhasil Disimpan');
			document.location.href="lihat-pelanggan.php";
		</script>
		<?php
}?> <!--tutup php--->
