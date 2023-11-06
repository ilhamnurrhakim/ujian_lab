<?php
$id = $_GET['idhapus'];

include('koneksi.php');

$hapus = $koneksi->query("DELETE FROM data_nasabah where No_rekening = '$id'");

if ($hapus == true) {
    echo "<script>
        alert('Data berhasil dihapus') 
        window.location='data_costumer.php'</script>";
} else {
    echo "<script>
        alert('Data gagal dihapus') 
        window.location='data_costumer.php'</script>";
}
