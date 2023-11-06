<!DOCTYPE html>
<html>

<head>
	<title>Input Transaksi</title>
</head>
<?php
include('koneksi.php');
$data = $koneksi->query("SELECT * FROM data_nasabah")->fetch_assoc();
?>

<body>
	<h1 align="center" style="background: #fbff00; margin: 50px; font-weight: bold; padding: 10px;">Input Data Transaksi</h1>
	<form method="POST">
		<table align="center" style="background: lightgray; font-weight: bold; padding: 50px;">
			<tr>
				<td>Nomor Rekening</td>
				<td><input type="text" value="<?php echo $data['No_rekening'] ?>" name="no"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" value="<?php echo $data['nama'] ?>" name="user"></td>
			</tr>
			<tr>
				<td>Nomor Plat</td>
				<td><input type="text" value="<?php echo $data['noplat'] ?>" name="nopol"></td>
			</tr>
			<tr>
				<td>Nama Kendaraan</td>
				<td><input type="text" value="<?php echo $data['nama_kendaraan'] ?>" name="nama_kendaraan"></td>
			</tr>
			<tr>
				<td>Tipe Kendaraan</td>
				<td><input type="text" value="<?php echo $data['Tipe_kendaraan'] ?>" name="tipe"></td>
			</tr>
			<tr>
				<td>Layanan</td>
				<td><select name="layanan" id="">
						<option value="Tipe A">Tipe A</option>
						<option value="Tipe B">Tipe B</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><a href="index.php">Kembali</a></td><br>
				<td><input type="submit" style="background: #fbff00; border: 2; width: 150px;" name="simpan" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	<br>
	<center><a href="data_transaksi.php">Lihat Data</a></center>
</body>

</html>
<?php
if (isset($_POST['simpan'])) {
	$no = $_POST['no'];
	$user = $_POST['user'];
	$nopol = $_POST['nopol'];
	$nama_kendaraan = $_POST['nama_kendaraan'];
	$tipe = $_POST['tipe'];
	$layanan = $_POST['layanan'];

	if ($layanan == 'Tipe A') {
		$biaya = 1500000;
	} elseif ($layanan == 'Tipe B') {
		$biaya = 1000000;
	}

	$simpan = $koneksi->query("INSERT INTO `transaksi`(`no_rekening`, `nama`, `noplat`, `nama_kendaraan`, `tipe_kendaraan`, `layanan_service`, `biaya_service`) VALUES ('$no','$user','$nopol','$nama_kendaraan','$tipe','$layanan','$biaya')");
	if ($simpan) {
		echo "<script>window.alert('Data Berhasil ditambah');
             window.location=(href='data_transaksi.php')</script>";
	}
}
?>