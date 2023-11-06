<?php
$id = $_GET['idhapus'];

include('koneksi.php');

$hapus = $koneksi->query("DELETE FROM transaksi where no_rekening = '$id'");

if ($hapus == true) {
    echo "<script>
        alert('Data berhasil dihapus') 
        window.location='data_transaksi.php'</script>";
} else {
    echo "<script>
        alert('Data gagal dihapus') 
        window.location='data_transaksi.php'</script>";
}
