<?php
include 'koneksi.php';

// mengaktifkan session
//session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
// if($_SESSION['status'] !="login"){
// 	header("location:../index.php");
// }

// menampilkan pesan selamat datang
// echo "Hai, selamat datang ". $_SESSION['username'];

?>
<br />
<br />
<!DOCTYPE html>
<html>

<head>
    <title>ILHAM ALMALIK</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background: lightgray;">
    <div class="header">
        <h2 align="center">BENGKEL XXX</h2><br>
    </div>
    <center>
        <a href="data_costumer.php" class="menu">Data Costumer</a>
        <a href="data_transaksi.php" class="menu">Transaksi</a>
    </center>

</body>

</html>