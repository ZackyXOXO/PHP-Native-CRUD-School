<?php
include  "koneksi.php";

$item = $_POST['item'];
$merk = $_POST['merk'];
$pack = $_POST['pack'];
$isikemasan = $_POST['qty'];
$isi = $pack * $isikemasan;

if ($isi < 10) {
	$status = "Kurang";
} elseif ($isi == 10) {
	$status = "Cukup";
} elseif ($isi >= 10 && 20) {
	$status = "OK";
} else {
	echo "Isi Tidak Ada/Kosong";
}
$sql = "INSERT INTO tb_boba VALUES ('','$item','$merk','$pack',$isikemasan,'$isi','$status')";
$query = mysqli_query($koneksi, $sql);

?>
<script language="javascript">
	alert('Data Berhasil Disimpan');
	document.location.href = "lihat-stock.php";
</script>
<?php
?>