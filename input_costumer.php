<!DOCTYPE html>
<html>

<head>
	<title>Input Nasabah</title>
</head>

<body>
	<h1 align="center" style="background: #fbff00; margin: 50px; font-weight: bold; padding: 10px;">Input Data Nasabah</h1>
	<form method="POST">
		<table align="center" style="background: lightgray; font-weight: bold; padding: 50px;">
			<tr class="td">
				<td>Nomor Rekening</td>
				<td><input type="text" name="no"></td>
			</tr>
			<tr class="td">
				<td>Nama</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr class="td">
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr class="td">
				<td>No Telepon</td>
				<td><input type="text" name="tlp"></td>
			</tr>
			<tr class="td">
				<td>Nomor Plat</td>
				<td><input type="text" name="nopol"></td>
			</tr>
			<tr class="td">
				<td>Nama Kendaraan</td>
				<td><input type="text" name="nama_kendaraan"></td>
			</tr>
			<tr class="td">
				<td>Tipe Kendaraan</td>
				<td><input type="text" name="tipe"></td>
			</tr>
			<tr class="td">
				<td><a href="index.php">Kembali</a></td><br>
				<td><input type="submit" name="simpan" style="background: #fbff00; border: 2; width: 150px;" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	<br>
	<center><a href="data_costumer.php">Lihat Data</a></center>
</body>

</html>
<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	$no = $_POST['no'];
	$user = $_POST['user'];
	$alamat = $_POST['alamat'];
	$tlp = $_POST['tlp'];
	$nopol = $_POST['nopol'];
	$nama_kendaraan = $_POST['nama_kendaraan'];
	$tipe = $_POST['tipe'];

	$simpan = $koneksi->query("INSERT INTO `data_nasabah`(`No_rekening`, `nama`, `alamat`, `notlp`, `noplat`, `nama_kendaraan`, `Tipe_kendaraan`) VALUES ('$no','$user','$alamat','$tlp','$nopol','$nama_kendaraan','$tipe')");
	if ($simpan) {
		echo "<script>window.alert('Data Berhasil ditambah');
             window.location=(href='data_costumer.php')</script>";
	}
}
?>