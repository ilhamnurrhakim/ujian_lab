<?php
$id = $_GET['idedit'];
include('koneksi.php');
$dataedit = $koneksi->query("SELECT * FROM data_nasabah WHERE No_rekening = '$id'")->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Pemesanan</title>
</head>

<body>
    <h1 align="center" style="background: #fbff00; margin: 50px; font-weight: bold; padding: 10px;">Edit Data Pemesanan</h1>
    <form method="POST">
        <table align="center" style="background: lightgray; font-weight: bold; padding: 50px;">
            <tr>
                <td>Nomor Rekening</td>
                <td><input type="text" value="<?php echo $dataedit['No_rekening']; ?>" name="no"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" value="<?php echo $dataedit['nama']; ?>" name="user"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" value="<?php echo $dataedit['alamat']; ?>" name="alamat"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" value="<?php echo $dataedit['notlp']; ?>" name="tlp"></td>
            </tr>
            <tr>
                <td>Nomor Plat</td>
                <td><input type="text" value="<?php echo $dataedit['noplat']; ?>" name="nopol"></td>
            </tr>
            <tr>
                <td>Nama Kendaraan</td>
                <td><input type="text" value="<?php echo $dataedit['nama_kendaraan']; ?>" name="nama_kendaraan"></td>
            </tr>
            <tr>
                <td>Tipe Kendaraan</td>
                <td><input type="text" value="<?php echo $dataedit['Tipe_kendaraan']; ?>" name="tipe"></td>
            </tr>
            <tr>
                <td><a href="index.php">Kembali</a></td><br>
                <td><input type="submit" style="background: #fbff00; border: 2; width: 150px;" name="simpan" value="UPDATE"></td>
            </tr>
        </table>
    </form>
    <br>
    <center><a href="data_costumer.php">Lihat Data</a></center>
</body>

</html>
<?php

if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $user = $_POST['user'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];
    $nopol = $_POST['nopol'];
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $tipe = $_POST['tipe'];

    $simpan = $koneksi->query("UPDATE `data_nasabah` SET `No_rekening`='$no',`nama`='$user',`alamat`='$alamat',`notlp`='$tlp',`noplat`='$nopol',`nama_kendaraan`='$nama_kendaraan',`Tipe_kendaraan`='$tipe' WHERE No_rekening = '$id'");
    if ($simpan) {
        echo "<script>window.alert('Data Berhasil ditambah');
             window.location=(href='data_costumer.php')</script>";
    }
}
?>